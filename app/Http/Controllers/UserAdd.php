<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAdd extends Controller
{
    public function addData() {
        return view('add');
    }

    public function storeData(Request $request)  {
        $user             = new User;
        $user->id         = $request->id;
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->age        = $request->age;
        $user->save();
        return view('confirmation');
    }

}
