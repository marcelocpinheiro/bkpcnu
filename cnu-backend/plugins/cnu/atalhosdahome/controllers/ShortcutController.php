<?php namespace cnu\AtalhosDaHome\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ShortcutController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('cnu.AtalhosDaHome', 'atalho-home', 'atalhos');
    }

    public function teste(){
        return view("teste");
    }
}
