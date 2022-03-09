<?php namespace Pandaprofit\Projects\Components;

use Cms\Classes\ComponentBase;
use Input;
use Pandaprofit\Projects\Models\Project;

class FilterProjects extends ComponentBase
{
	public function componentDetails(){
		return [
			'name' => 'Filter Projects',
			'description' => 'Filter Projects'
		];
	}

	public function onRun() {
		$this->projects = $this->filterProjects();
		$this->categorys = $this->filterCategorys();
	}

	public function filterCategorys()
	{
		// $query = Project::all();
		// $categorys = [];

		// foreach ($query as $project) {
		// 	$categorys[] = $project->type;
		// }
		// $categorys = array_unique($categorys);
		$categorys = Project::select('type')->groupBy('type')->orderBy('type')->pluck('type');
		// dd($categorys);
		return $categorys;
	}

	protected function filterProjects() {

		$category = Input::get('category');
		$query = Project::all();

		if ($category) {
			$query = Project::where('type', '=', $category)->get();
		}


		return $query;
	}

	public $projects;
	public $categorys;
}
