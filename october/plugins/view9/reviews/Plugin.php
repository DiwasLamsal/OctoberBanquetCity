<?php namespace View9\Reviews;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'View9\Reviews\Components\ReviewForm'=>'reviewForm'
        ];
    }

    public function registerSettings()
    {

    }
}
