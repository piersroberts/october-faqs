<?php namespace BuzzwordCompliant\FAQs;
use Backend;

class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'FAQs',
            'author' => 'piersroberts@gmail.com',
            'icon' => 'icon-question'
        ];
    }

    public function registerNavigation()
    {
        return [
            'faqs' => [
                'label'       => 'FAQs',
                'url'         => Backend::url('buzzwordcompliant/faqs/faqs'),
                'iconSvg'     => '/plugins/buzzwordcompliant/faqs/assets/icon.svg',
                'permissions' => ['buzzwordcompliant.faqs.*'],
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'BuzzwordCompliant\FAQs\Components\FAQ' => 'faq'
        ];
    }
}