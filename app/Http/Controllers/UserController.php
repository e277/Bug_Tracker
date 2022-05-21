<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class UserController extends Controller
{
    public function index() {
        return view('user');
    }
    public function viewProject() {
        $projects = Project::paginate(5);
        return view('project', ['projects' => $projects]);
    }
    public function viewBug() {
        return view('bug');
    }
}
