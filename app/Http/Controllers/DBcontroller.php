<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // for including the DB activities

class DBcontroller extends Controller
{
    public function display() {
        // echo "Testing DB controller";

        // return DB::select("select * from student_info");
        
        $users = DB::select("select * from student_info");
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "</tr>";
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>" . $user->first_name . "</td><td>" . $user->last_name . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
