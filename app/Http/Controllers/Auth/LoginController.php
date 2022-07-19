<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
    protected $redirectTo = RouteServiceProvider::ADMIN;


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        return view("auth.login");
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        $recuperation = DB::select('select role_id  from users where email=?', [$request->input('email')]);
        $getStatus = DB::select('select status  from users where email=?', [$request->input('email')]);
        if (Auth::attempt($credentials) && $recuperation[0]->role_id == 1) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        } elseif (Auth::attempt($credentials) && $recuperation[0]->role_id == 2 && $getStatus[0]->status == true) {
            $request->session()->regenerate();
            return redirect()->route('download');
        }elseif (Auth::attempt($credentials) && $recuperation[0]->role_id == 2 && $getStatus[0]->status == false){
            return back()->with('warning', "Votre compte a été desactivé");
        } elseif (Auth::attempt($credentials) && $recuperation[0]->role_id == 3) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }  else  {
            return back()->with('warning', "L'un des champs entré est incorrect!");
        }
    }
}
