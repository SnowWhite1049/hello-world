<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ABCController extends Controller
{
    public function index() {
        echo "<br>We are now testing the terminable middleware for the first time!";
    }
}
