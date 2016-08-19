<?php
namespace BuzzwordCompliant\FAQs\Components;

class FAQ extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'FAQs',
            'description' => 'Exposes FAQs'
        ];
    }

    public function defineProperties()
    {
        return [
            'id' => [
                'title'             => 'FAQ Id',
                'description'       => 'The Id of the FAQ',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Id must be a number'
            ]
        ];
    }

    public function questions()
    {
        return ['First Question', 'Second Question', 'Third Question'];
    }
}