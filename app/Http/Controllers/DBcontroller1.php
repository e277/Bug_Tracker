<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // model i just created

class DBcontroller1 extends Controller
{
    public function display() {
        // $data = User::all();
        $data = User::paginate(2);
        return view('users2', ['users2'=>$data]);
    }
}
