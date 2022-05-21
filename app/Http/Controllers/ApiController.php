<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\User;

class ApiController extends Controller
{
    public function apifun() {
        return ['course'=>'PHP', 'Duration'=>'6months' ];
    }

    public function table() {
        $users = DB::select('select * from student_info');
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>First Name</th>";
        echo "<th>First Name</th>";
        echo "<th>Age</th>";
        echo "</tr>";
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>" . $user->id . "</td>";
            echo "<td>" . $user->first_name . "</td>";
            echo "<td>" . $user->first_name . "</td>";
            echo "<td>" . $user->age . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
