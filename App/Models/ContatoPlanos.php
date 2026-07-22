<?php

namespace App\Models;


use PDO;
use Core\Logs;
use Core\Model;
use Core\Mail;
use App\Models\Planos;
use PDOException;

class ContatoPlanos extends Model
{

    protected $contato;

    protected $table = 'clientes';
    protected $errors;
    protected $plans;
    protected $mails;


    public function __construct()
    {
        parent::__construct();

        Logs::iniciar();
        $this->errors = [];

        $this->plans = new Planos();
        $this->mails = new Mail();
    }

    public function push_cliente($dados)
    {
        $sql = "INSERT INTO $this->table (nome, celular, criado_em,cidade,tipo_plano,MSG) 
       VALUES (:nome, :celular, :criado_em, :cidade, :tipo_plano,:msg)";

        $stmt = $this->db->prepare($sql);

        try {
            $stmt->bindValue(':nome', $dados['name']);
            $stmt->bindValue(':celular', $dados['telefone']);
            $stmt->bindValue(':criado_em', date('Y-m-d H:i:s')); // Funciona direto!
            $stmt->bindValue(':cidade', $dados['cidade']);
            $stmt->bindValue(':tipo_plano', $dados['plano']);
            $stmt->bindValue(':msg', $dados['msg']);



            if ($stmt->execute() && $stmt->rowCount() > 0) {
                $planos = $this->plans->list_planos();
                $planosIndexados = array_column($planos, null, 'id');

                // Busca o plano diretamente pelo ID enviado
                $planoEncontrado = $planosIndexados[$dados['plano']] ?? null;

                if ($planoEncontrado) {
                    // O plano foi achado! Você pode acessar as colunas dele:
                    $nomeDoPlano = $planoEncontrado['nome_plano'];
                }

                $this->mails->enviar_email($dados['name'], $dados['cidade'], $dados['telefone'], $nomeDoPlano);

                return true;
            } else {
                return false;
            };
        } catch (PDOException $e) {
            Logs::manipuladorDeExcecoes($e);
            // print_R($e->getMessage());
        }
    }
}
