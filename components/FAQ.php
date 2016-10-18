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
            'slug' => [
                'title'             => 'FAQ Name',
                'description'       => 'The name of the FAQ',
                'type'              => 'dropdown',
                'placeholder'       => 'Please choose a FAQ',
                'required'          => true
            ],
            'id' => [
                'title'             => 'FAQ Id [deprecated]',
                'description'       => 'Use to overide the selected FAQ',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Id must be a number'
            ]
        ];
    }

    public function getSlugOptions()
    {
        $faqs = \BuzzwordCompliant\FAQs\Models\FAQ::all();
        $options = [];
        foreach($faqs as $faq){
            $options[$faq->slug] = $faq->name ? $faq->name : $faq->slug;
        }
        return $options;
    }

    public function onRun()
    {
        if($this->property('id')){
            Log::notice('FAQ: Fetching a FAQ by Id is deprecated, please switch to using the dropdown in '.$this->getPage()->fileName);
            $identifier = $this->property('id');
            $this->faq = FAQModel::with('questions')->find($identifier);
        }else{
            $identifier = $this->property('slug');
            $this->faq = FAQModel::with('questions')->where('slug',$identifier);
        }

        if(!$this->faq){
            Log::notice('FAQ: "' . $identifier . '" not found in '.$this->getPage()->fileName);
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