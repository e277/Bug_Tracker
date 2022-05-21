<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserDBquerybuilder extends Controller
{
    public function DBquery() {
        // return "code here";
        // $data = DB::table('student_info')->get(); // select * from student_info;
        // $data = DB::table('student_info')->where('id',3)
        //                                  ->get(); // select * from student_info where id = 3;
        // $data = DB::table('student_info')->where('id',5)
        //                                 ->where('first_name','shanice')
        //                                 ->get(); // select * from student_info where id = 5 and first name = 'shanice';
        // $data = DB::table('student_info')->where('id',5)
        //                                 ->orwhere('first_name','shanice')
        //                                 ->get(); // select * from student_info where id = 5 or first name = 'shanice';
        // return view('userlist', ['data'=>$data]);
        // return (array)DB::table('student_info')->find('1');
        // return DB::table('student_info')
        //                 ->insert([
        //                     'id'=>20,
        //                     'first_name'=>'akaylia',
        //                     'last_name'=>'crown',
        //                     'age'=>37
        //                 ]); //Insert record
        // return DB::table('student_info')
        //                 ->where('id',20)
        //                 ->update([
        //                     'id'=>20,
        //                     'first_name'=>'Akaylia',
        //                     'last_name'=>'Muir',
        //                     'age'=>37
        //                 ]); //Update record
        // return DB::table('student_info')
        //                 ->where('id',20)
        //                 ->delete(); //Delete where id = 4
        // return (array)DB::table('student_info')
        //                         ->count(); //count the number of records
        // return "Count of Id : " . DB::table('student_info')->count('id'); // wiil return the count
        // return "Average of Id : " . DB::table('student_info')->avg('id'); // wiil return the average
        // return "Minimum of Id : " . DB::table('student_info')->min('id'); // wiil return the minimum
        // return "Maximum of Id : " . DB::table('student_info')->max('id'); // wiil return the maximum
        // return "Sum of Id : " . DB::table('student_info')->sum('id'); // wiil return the sum
        // return DB::table('student_info')
        //             ->join('student_personal_info', 'student_info.id','=','student_personal_info.id')
        //             ->get(); //select * from student_info join student_personal_info on student_info.id = student_personal_info.id
        // return DB::table('student_info')
        //             ->join('student_personal_info','student_info.id','=','student_personal_info.id')
        //             ->select('student_personal_info.*')
        //             ->get(); // get data from a specific table
        return DB::table('student_info')
                    ->join('student_personal_info','student_info.id','=','student_personal_info.id')
                    ->select('student_info.first_name','student_personal_info.address')
                    ->get(); //get specific records
        // return DB::table('student_info')
        //             ->join('student_personal_info','student_info.id','=','student_personal_info.id')
        //             ->where('student_info.id',1)
        //             ->select('student_info.first_name','student_personal_info.address')
        //             ->get(); //get specific records with where
        
    }
}
