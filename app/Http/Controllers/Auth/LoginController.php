<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use http\Env\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Notify;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function userlogin(Request $request){
        $checkuser = User::where('nombreUsuario',$request->nombre)->first();
        if(!$checkuser){
            Notify::error('Usuario no existe','Error');
            return redirect()->back();
        }
        if($checkuser){
            if(Hash::check($request->input("password"), $checkuser->clave)) {
                Auth::loginUsingId($checkuser->idUser, true);
                $username = $checkuser->nombre . " " . $checkuser->apellido;
                Notify::success('Usuario logueado correctamente', 'Exito');
                return view('admin.dashboard');
            }else{
                Notify::error('Clave Incorrecta','Error');
                return redirect()->back();
            }
        }
    }
}
