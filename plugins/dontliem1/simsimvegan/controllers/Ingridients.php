<?php namespace Dontliem1\Simsimvegan\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Ingridients extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dontliem1.Simsimvegan', 'simsimvegan-main', 'ingridients-item');
    }
}
