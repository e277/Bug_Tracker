<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserDeleteController extends Controller
{
    public function displayData() {
        $data = User::all();
        return view('list', ['users'=>$data]);
    }

    public function deleteData($id) {
        $data = User::find($id);
        $data->delete();
        return redirect('list');
    }

    public function showData($id) {
        // return User::find($id);
        $data = User::find($id);
        return view('edit', ['data'=>$data]);
    }

    public function updateData(Request $request) {
        // return $request->input();

        $data = User::find($request->id);
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->age = $request->age;
        $data->save();
        return redirect('list');
    }
}

