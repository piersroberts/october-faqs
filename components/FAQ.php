<?php
namespace BuzzwordCompliant\FAQs\Components;

use Illuminate\Support\Facades\Log;
use BuzzwordCompliant\FAQs\Models\FAQ as FAQModel;
class FAQ extends \Cms\Classes\ComponentBase
{
    private $faq;

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

    public function onRun()
    {
        $this->faq = FAQModel::with('questions')->find($this->property('id'));
        if(!$this->faq){
            Log::notice('FAQ: "' . $this->property('id') . '" not found in '.$this->getPage()->fileName);
        }
    }

    public function questions()
    {
        return isset($this->faq->questions) ? $this->faq->questions : [];
    }

    public function title()
    {
        return isset($this->faq->name) ? $this->faq->name : '';
    }
}