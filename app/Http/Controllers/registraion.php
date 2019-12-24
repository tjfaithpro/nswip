<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registraion extends Controller
{
    public function index(){
        return view('registraion.registration');
    }

    public function store(Request $request){

    }
}
