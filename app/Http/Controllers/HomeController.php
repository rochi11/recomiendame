<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('welcome');
    }

    public function checklogin(){

        if(Auth::check()){
            return view('auth.login');
        }else{
            return redirect('admin.pages');
        }
    }

    public function saludo()
    {
        $saludo = "hola desde recomiendame";
        return "Holaaaa";
    }
}
