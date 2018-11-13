<?php namespace Kevinlyh\User;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'kevinlyh.user::lang.plugin.name',
            'description' => 'kevinlyh.user::lang.plugin.description',
            'author'      => 'Kevin liu',
            'icon'        => 'icon-user'
        ];
    }

    public function registerComponents()
    {
        return [
            \Kevinlyh\User\Components\Account::class       => 'account'
        ];
    }


    public function registerMailTemplates()
    {
        return [
            'kevinlyh.user::mail.welcome',
        ];
    }
}
