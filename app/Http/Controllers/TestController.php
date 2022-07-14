<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        echo "Just a moment...<br> We are now testing the RoleMiddleware!";
    }
}
