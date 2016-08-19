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
//
//    public function registerPermissions()
//    {
//        return [
//            'buzzwordcompliant.dbcontent.list_static_blocks' => [
//                'label' => 'Show the static block list',
//                'tab' => 'DBContent'
//            ],
//            'buzzwordcompliant.dbcontent.new_static_block' => [
//                'label' => 'Add a static block',
//                'tab' => 'DBContent'
//            ],
//            'buzzwordcompliant.dbcontent.edit_static_block' => [
//                'label' => 'Save changes to an existing static block',
//                'tab' => 'DBContent'
//            ],
//            'buzzwordcompliant.dbcontent.delete_static_block' => [
//                'label' => 'Delete a static block',
//                'tab' => 'DBContent'
//            ],
//            'buzzwordcompliant.dbcontent.change_key_names' => [
//                'label' => 'Change the key name of a static block',
//                'tab' => 'DBContent'
//            ]
//        ];
//    }

}