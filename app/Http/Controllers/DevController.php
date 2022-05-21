<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DevController extends Controller
{
    public function view() {
        // $dev_table= User::paginate(5);
        $dev_table= User::all();
        return view('admin.developer.view', ['dev_table' =>  $dev_table]);
    }

    public function updateStatus($user_id, $status_code) {
        try {
            $update_user = User::whereId($user_id)->update([
                'status' => $status_code
            ]);
            if ($update_user) {
                return redirect('view-dev');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function addDeveloper($id) {
        $add_dev = User::find($id);
        $add_dev->save();

    }
}