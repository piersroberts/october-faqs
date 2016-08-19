<?php namespace BuzzwordCompliant\FAQs\Models;
use October\Rain\Database\Model;


class Question extends Model
{
//    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    public $table = 'bc_questions';
    public $belongsTo = [
        'faq' => 'FAQ',
        'order'=>'sort_order'
    ];

}