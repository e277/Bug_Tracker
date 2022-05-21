<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bug;
use Illuminate\Support\Facades\DB;

class BugController extends Controller
{
    public function view()
    {
        $bug_table = DB::table('bugs')->paginate(5);
        return view('admin.bug.view', ['bug_table' => $bug_table]);
    }

    public function create()
    {
        $bug_table = DB::table('projects')->pluck('id');
        return view('admin.bug.create', ['bug_table' => $bug_table]);
    }
    public function save(Request $request)
    {
        // dd($request->id);
        $request->validate([
            'bug_name' => 'required',
            'proj_issue' => 'required',
            'developer' => 'required'
        ]);
        $bug_table             = new Bug;
        $bug_table->proj_id    = $request->id;
        $bug_table->bug_name   = $request->bug_name;
        $bug_table->proj_issue = $request->proj_issue;
        $bug_table->developer  = $request->developer;
        $bug_table->save();
        return view('admin.bug.create', ['bug_table' => Bug::all()]);
    }
    public function delete($id)
    {
        $bug_table = Bug::find($id);
        $bug_table->delete();
        return redirect('view-bug');
    }
    public function editPage($id)
    {
        $bug_table = Bug::find($id);
        return view('admin.bug.edit', ['bug_table' => $bug_table]);
    }
    public function edit(Request $request)
    {
        $bug_table             = Bug::find($request->id);
        $bug_table->bug_name   = $request->bug_name;
        $bug_table->proj_issue = $request->proj_issue;
        $bug_table->save();
        return redirect('view-bug');
    }
}
