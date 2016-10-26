<?php

namespace BuzzwordCompliant\FAQs\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\Sortable;

class Question extends Model
{
    use Sortable;
    public $table = 'bc_questions';
    public $belongsTo = [
        'faq' => 'FAQ',
        'order' => 'sort_order',
    ];
}
