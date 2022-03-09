<?php namespace Pandaprofit\Projects;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
			return [
				'Pandaprofit\Projects\Components\FilterProjects' => 'filterprojects'
			];
    }

    public function registerSettings()
    {
    }
}
