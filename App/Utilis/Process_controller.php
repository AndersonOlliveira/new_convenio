<?php


namespace App\Utilis;

use Model;
use Core\Logs;
use Core\Controller;
use App\Models\Planos;
use App\Models\ContatoPlanos;


class Process_controller extends Controller
{

    protected $contato;
    protected $errors;


    public function __construct()
    {
        // parent::__construct();

        $this->contato = new ContatoPlanos();

        Logs::iniciar();
        $this->errors = [];
    }


    public function process_cliente($dados)
    {
        $retorno = [];
        $retorno =  $this->contato->push_cliente($dados);

        if (isset($retorno)) {
            $retorno = true;
        } else {
            $retorno['error'] = 'Falha em enviar a solicitação';
        }

        return $retorno;
    }
}
