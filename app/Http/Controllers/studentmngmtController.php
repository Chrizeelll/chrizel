<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentmngmtController extends Controller
{
    public function index ()
    {
        return view ('student.index');
    }
}
