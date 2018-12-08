<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('page.index');
    }

    public function registro(){
        return view('page.registro');
    }

    
    public function login(){
        return view('page.login');

    }

    public function auth(Request $request){
        if($request->email == 'admin'){
            return view('panel_admin.index');
        }else{
            return redirect('/user'); 
        }
    }


}
