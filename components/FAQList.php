<?php
namespace BuzzwordCompliant\FAQs\Components;

use Cms\Classes\ComponentBase;
use BuzzwordCompliant\FAQs\Models\FAQ as FAQModel;

class FAQList extends ComponentBase
{
    private $faqList;

    public function componentDetails()
    {
        return [
            'name' => 'FAQ List',
            'description' => 'Show a list of all FAQs',
        ];
    }

    public function onRun()
    {
        $this->faqList = FAQModel::all();
    }

    public function all()
    {
        return isset($this->faqList) ? $this->faqList : [];
    }
}
