<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function view()
    {
        $table_data = Project::paginate(5);
        return view('admin.project.view', ['table_data' =>  $table_data]);
    }

    public function create() {
        return view('admin.project.create');
    }
    public function save(Request $request) {
        $table_data            = new Project;
        $table_data->proj_name = $request->proj_name;
        $table_data->proj_des  = $request->proj_des;
        $table_data->save();
        return view('admin.project.create', ['table_data' =>  Project::all()])
                    ->with('project-added', 'Project added successfully');
    }

    public function delete($id) {
        $table_data = Project::find($id);
        $table_data->delete();
        return redirect('view-project');
    }

    public function editPage($id) {
        $table_data = Project::find($id);
        return view('admin.project.edit', ['table_data'=>$table_data]);
    }
    public function edit(Request $request) {
        $table_data            = Project::find($request->id);
        $table_data->proj_name = $request->proj_name;
        $table_data->proj_des  = $request->proj_des;
        $table_data->save();
        return redirect('view-project');
    }
}
