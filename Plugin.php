<?php

namespace BuzzwordCompliant\FAQs;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'FAQs',
            'author' => 'piersroberts@gmail.com',
            'icon' => 'icon-question',
            'homepage' => 'https://github.com/piersroberts/october-faqs',
        ];
    }

    public function registerNavigation()
    {
        return [
            'faqs' => [
                'label' => 'FAQs',
                'url' => Backend::url('buzzwordcompliant/faqs/faqs'),
                'iconSvg' => '/plugins/buzzwordcompliant/faqs/assets/icon.svg',
                'permissions' => ['buzzwordcompliant.faqs.*'],
            ],
        ];
    }

    public function registerComponents()
    {
        return [
            'BuzzwordCompliant\FAQs\Components\FAQ' => 'faq',
            'BuzzwordCompliant\FAQs\Components\FAQList' => 'faqlist',
        ];
    }
}
