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

        echo '<pre>';
        print_r('estou chegando aqui');

        print_r($this->plans->list_planos());
    }
}
