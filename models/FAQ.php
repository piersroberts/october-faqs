<?php namespace BuzzwordCompliant\FAQs\Models;

use October\Rain\Database\Model;

class FAQ extends Model
{
    use \October\Rain\Database\Traits\Sluggable;

    public $table = 'bc_faqs';

    public $hasMany = [
        'questions' => [
            'BuzzwordCompliant\FAQs\Models\Question',
            'key'   => 'faq_id',
            'order' => 'sort_order'
        ],
        'questions_count' => [
            'BuzzwordCompliant\FAQs\Models\Question',
            'key'   => 'faq_id',
            'count' => true
        ]
    ];

    protected $slugs = ['slug' => 'name'];
}
