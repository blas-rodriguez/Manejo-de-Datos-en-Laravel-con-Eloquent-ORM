<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function getAllProjects() {
        $projects = Project::take(10)->get();
        return $projects;
    }

    public function insertProject(Request $request) {
    for ($i=1; $i<=10; ++$i)
    {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nombre del proyecto'.$i;
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $project->save();
    }
        
    
        return "Guardado";
    }

    public function updateProject() {
        $project = Project::find(2);
        $project->name = 'Proyecto de tecnología';
        $project->save();
    
        return "Actualizado";
    }

    public function inactiveProject()
    {
        Project::where('is_active', 0)
        ->update(['name' => 'I am desactivated']);

        return"Actualizado";
    }

    public function deleteProject() {
        $project = Project::where('project_id', '>', 15)->delete();
        return "Registros eliminados";
    }

    // $table->softDeletes();

    // Schema::create('your_table', function (Blueprint $table) {
    //    	    ...
    //         $table->softDeletes();
    //     });
}
