<?php
namespace BuzzwordCompliant\FAQs\Components;

use Illuminate\Support\Facades\Log;
use BuzzwordCompliant\FAQs\Models\FAQ as FAQModel;
class FAQList extends \Cms\Classes\ComponentBase
{
    private $faqList;

    public function componentDetails()
    {
        return [
            'name' => 'FAQ List',
            'description' => 'Show a list of all FAQs'
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