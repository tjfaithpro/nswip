<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexPage extends Controller
{
    public function index(){
        return view('index');
    }
}
