<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('panel_admin.index');
    }

    public function grafLinea(){
        return view('panel_admin.flot');
    }

    public function grafOtr(){
        return view('panel_admin.morris');
    }

    public function participante(){
        return view('panel_admin.participante');
    }

    public function formularios(){
        return view('panel_admin.forms');
    }

    public function configuraciones(){
        return view('panel_admin.configuraciones');

    }

}
