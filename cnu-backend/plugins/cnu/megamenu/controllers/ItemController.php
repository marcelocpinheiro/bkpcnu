<?php namespace cnu\MegaMenu\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ItemController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('cnu.MegaMenu', 'megamenu', 'side-menu-item-item');
    }
}
