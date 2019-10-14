<?php namespace cnu\Conteudo\Controllers;

use Backend\Classes\Controller;
use cnu\Conteudo\Models\Pagina;
use BackendMenu;

class PaginaController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('cnu.Conteudo', 'paginas', 'pagina');
    }

    public function getRoute(){
        if(!isset($_GET['route'])){
            abort(400, "Wrong parameters");
        }else{
            $page = Pagina::where('route', $_GET['route'])->first();
            if(!$page){
                abort(400, "Route not found");
            }else{
                return $page;
            }
        }
    }
}
