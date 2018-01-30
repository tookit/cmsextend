<?php namespace Socklab\Cmsextend;

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
        Event::listen('backend.form.extendFields', function($widget) {
            if (!$widget->model instanceof \Cms\Classes\Page) return;

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
        });
    }
}
