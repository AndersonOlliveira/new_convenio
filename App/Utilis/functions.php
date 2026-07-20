<?php


namespace App\Utilis;

use App\Models\Planos;

class functions
{

    protected $planss;

    public function __construct()
    {
        $this->planss = new Planos();
    }

    public function tratar_inputs($input)
    {


        $name = trim($input['name'] ?? '');
        $cidade = trim($input['cidade'] ?? '');
        $telefone = trim($input['telefone'] ?? '');
        $plano = trim($input['plano'] ?? '');
        $mensagem = trim($input['mensagem'] ?? ($input['msg'] ?? ''));

        $errors = [];

        if ($name === '') {
            $errors['name'] = 'Nome é obrigatório';
        }

        if ($cidade === '') {
            $errors['cidade'] = 'Cidade é obrigatória';
        }

        if ($telefone === '') {
            $errors['telefone'] = 'Telefone é obrigatório';
        } elseif (!preg_match('/^[0-9+()\-\s]{6,20}$/', $telefone)) {
            $errors['telefone'] = 'Telefone inválido';
        }

        if ($plano === '') {
            $errors['plano'] = 'Plano é obrigatório';
        } else {
            // opcional: validar se o plano existe
            $planos = $this->planss->list_planos();
            $planIds = array_column($planos, 'plano_id');
            if (!in_array($plano, $planIds) && !in_array($plano, array_column($planos, 'nome_plano'))) {
                $errors['plano'] = 'Plano inválido';
            }
        }

        if ($mensagem === '') {
            $errors['mensagem'] = 'Mensagem é obrigatória';
        }

        return $errors;
    }
}
