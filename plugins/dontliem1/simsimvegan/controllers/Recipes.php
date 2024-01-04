<?php namespace Dontliem1\Simsimvegan\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\BackendMenu;

class Recipes extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController',
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dontliem1.Simsimvegan', 'simsimvegan-main', 'recipes-item');
    }
}
