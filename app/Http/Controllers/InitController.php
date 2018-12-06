<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InitController extends Controller
{
    public function index(){
        return view('page.index');
    }

    public function registro(){
        return view('page.registro');
    }
}
