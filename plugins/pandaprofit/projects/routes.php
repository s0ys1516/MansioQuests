<?php

use Pandaprofit\Projects\Models\Project;

Route::get('sitemap.xml', function() {

  $projects = Project::all();

  return Response::view('pandaprofit.projects::sitemap', ['projects' => $projects])->header('Content-type', 'text/xml');
});
