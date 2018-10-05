<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('hola');
        return view('admin.welcome');
    }

    public function checklogin(){
        if(Auth::check()){
            return view('admin.inicio');
        }else{
            return view('admin.welcome');
        }
    }
}
