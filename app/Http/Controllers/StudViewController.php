<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudViewController extends Controller
{
    public function view() {
        $users = DB::select("select * from student");
        // print_r($users);exit;
        return view("stud_view", ["users" => $users]);
    }
}
