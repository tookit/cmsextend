<?php namespace Socklab\Cmsextend;

use Backend\Widgets\Form;
use System\Classes\PluginBase;
use Illuminate\Support\Facades\Event;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function register()
    {
        Event::listen('backend.form.extendFields', function(Form $widget) {
            if ($widget->model instanceof \Cms\Classes\Page){
                $widget->addFields([
                    'settings[meta_keywords]' => [
                        'label' => 'Meta Keywords',
                        'tab' => 'cms::lang.editor.meta',
                        'type' => 'textarea',
                        'size' => 'tiny',
                        'span' => 'full',
                    ],
                    'settings[show_in_nav]' => [
                        'label' => 'In Navigation',
                        'tab' => 'cms::lang.editor.meta',
                        'type' => 'checkbox',
                        'size' => 'tiny',
                        'span' => 'right',
                    ],
                    'settings[order_in_nav]' => [
                        'label' => 'Order In Navigation',
                        'tab' => 'cms::lang.editor.meta',
                        'type' => 'number',
                        'default' => '1',
                        'size' => 'tiny',
                        'span' => 'left',
                    ],
                ], 'primary');
            }elseif ($widget->model instanceof \Backend\Models\BrandSetting){
                $widget->addFields([
                    'social[twitter]' => [
                        'label' => 'Twitter',
                        'tab' => 'Social',
                        'type' => 'text',
                        'span' => 'full',
                    ],
                    'social[facebook]' => [
                        'label' => 'Facebook',
                        'tab' => 'Social',
                        'type' => 'text',
                        'span' => 'full',
                    ],
                    'social[youtube]' => [
                        'label' => 'Youtube',
                        'tab' => 'Social',
                        'type' => 'text',
                        'span' => 'full',
                    ],
                    'social[googleplus]' => [
                        'label' => 'Facebook',
                        'tab' => 'Social',
                        'type' => 'text',
                        'span' => 'full',
                    ],
                    'social[qq]' => [
                        'label' => 'QQ',
                        'tab' => 'Social',
                        'type' => 'text',
                        'span' => 'full',
                    ],
                    'social[skype]' => [
                        'label' => 'Skype',
                        'tab' => 'Social',
                        'type' => 'text',
                        'span' => 'full',
                    ],
                    'social[github]' => [
                        'label' => 'Github',
                        'tab' => 'Social',
                        'type' => 'text',
                        'span' => 'full',
                    ],

                ], 'primary');
            }


        });
    }
}
