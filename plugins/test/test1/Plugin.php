<?php namespace Test\Test1;

use Backend;
use System\Classes\PluginBase;

/**
 * Test1 Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Test1',
            'description' => 'No description provided yet...',
            'author'      => 'Test',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Test\Test1\Components\Comp1' => 'comp1',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'test.test1.some_permission' => [
                'tab' => 'Test1',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'test1' => [
                'label'       => 'Test1',
                'url'         => Backend::url('test/test1/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['test.test1.*'],
                'order'       => 500,
            ],
        ];
    }
}
