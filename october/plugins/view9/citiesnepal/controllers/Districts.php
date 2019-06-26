<?php namespace View9\Citiesnepal\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Districts extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'view9.citiesnepal.manage_districts' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('View9.Citiesnepal', 'Cities', 'districts');
    }
}
