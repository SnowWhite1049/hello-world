<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudInsertController extends Controller
{
    public function insertform() {
        return view('stud_create');
    }

    public function insert(Request $request) {
        $name = $request->input("stud_name");
        DB::insert('insert into student (name) value(?)', [$name]);
        echo "A record inserted successfully!<br/>";
        echo "<a href='/insert'>Click Here</a> to go back";
    }
}
