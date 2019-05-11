<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
use Notify;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest')->except('logout');
    }

    public function showloginform(){
        return view('admin.pages.login');
    }

    public function userlogin(Request $request){

        $checkuser = User::where('user',$request->user)->first();
//        dd($checkuser);
        if(!$checkuser){
            Notify::error('Usuario no existe','Error');
            return redirect()->back();
        }
        if($checkuser){
            if(Hash::check($request->input("clave"), $checkuser->password)){
                Auth::loginUsingId($checkuser->id,true);
                $username = $checkuser->nombre . " " . $checkuser->apellido;
                Notify::success('Bienvenido '.$username,'Éxito');
                return view('admin.welcome');
            }
            else{
                Notify::error('Clave Incorrecta','Error');
                return redirect()->back();
            }

        }
    }

    public function userlogout()
    {
        Auth::logout();
        Notify::success('Hasta pronto ','Éxito');
        return redirect('/');
    }
}
