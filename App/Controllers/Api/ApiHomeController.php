<?php


namespace App\Controllers\Api;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// use App\Models\Mobilidades;
// use App\Models\Pagamento;
// use App\Models\Planos;
// use App\Models\PushDados;

use Core\Controller;
use App\Models\Planos;
use App\Utilis\functions;
use App\Utilis\Process_controller;

// use Core\Functions as CoreFunctions;

class ApiHomeController extends Controller
{

    protected $validar;
    protected $alunos;
    protected $plans;
    protected $utlilitarios;
    protected $process;

    public function __construct()
    {
        $this->setApiHeaders(); // Reaproveita de forma explícita

        // $this->validar = new CoreFunctions();
        // $this->alunos = new PushDados();
        $this->plans  = new Planos();
        $this->utlilitarios  = new functions();
        $this->process  = new Process_controller();
    }

    public function process_register()
    {

        $input = json_decode(file_get_contents('php://input'), true) ?: $_POST;

        $errors = $this->utlilitarios->tratar_inputs($input);

        if (!empty($errors) && isset($errors)) {
            header('Content-Type: application/json');
            $this->json([
                'status' => false,
                'errors' => $errors
            ], 422);
            exit;
        }

        $retorno  = $this->process->process_cliente($input);

        if (isset($retorno)) {
            header('Content-Type: application/json');
            $this->json([
                'status' => true,
                'data' => [
                    'mensagem' => 'Sucesso em enviar Formúlario',
                ]
            ], 200);
            exit;
        }
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
