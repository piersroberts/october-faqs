<?php

namespace BuzzwordCompliant\FAQs\Controllers;

use Backend\Facades\BackendMenu;
use Illuminate\Http\Request;

class FAQs extends Controller
{
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BuzzwordCompliant.FAQs', 'faqs');
    }

    public $implement = [
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.RelationController',
        'Backend.Behaviors.ReorderController',
    ];
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function reorderExtendQuery($query)
    {
        $query->where('faq_id', $this->params[0]);
    }
}
