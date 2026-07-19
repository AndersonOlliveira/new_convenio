<?php


namespace App\Controllers\Api;


// use App\Models\Mobilidades;
// use App\Models\Pagamento;
// use App\Models\Planos;
// use App\Models\PushDados;
use App\Models\Planos;
use Core\Controller;
// use Core\Functions as CoreFunctions;

class ApiHomeController extends Controller
{

    protected $validar;
    protected $alunos;
    protected $plans;

    public function __construct()
    {
        $this->setApiHeaders(); // Reaproveita de forma explícita

        // $this->validar = new CoreFunctions();
        // $this->alunos = new PushDados();
        $this->plans  = new Planos();
    }

    public function process_register()
    {
        // Recebe dados do front (POST JSON ou form-data)
        $input = json_decode(file_get_contents('php://input'), true) ?: $_POST;

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
            $planos = $this->plans->list_planos();
            $planIds = array_column($planos, 'id');
            if (!in_array($plano, $planIds) && !in_array($plano, array_column($planos, 'nome'))) {
                $errors['plano'] = 'Plano inválido';
            }
        }

        if ($mensagem === '') {
            $errors['mensagem'] = 'Mensagem é obrigatória';
        }

        if (!empty($errors)) {
            header('Content-Type: application/json');
            $this->json([
                'status' => false,
                'errors' => $errors
            ], 422);
            exit;
        }

        // Se chegar aqui, dados válidos — retornar confirmação simples
        header('Content-Type: application/json');
        $this->json([
            'status' => true,
            'data' => [
                'name' => $name,
                'cidade' => $cidade,
                'telefone' => $telefone,
                'plano' => $plano,
                'mensagem' => $mensagem,
            ]
        ], 200);
        exit;
    }
    public function process_planos()
    {

        $dados = $this->plans->list_planos();

        header('Content-Type: application/json');
        $this->json([
            'status' => true,
            'data' => $dados
        ], 200);

        exit;
    }
}
