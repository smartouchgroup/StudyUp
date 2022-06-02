<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{

    use ResetsPasswords;

    protected $confirmation = RouteServiceProvider::CONFIRMATION;

    public function index() {return view('auth.passwords.email');}

    public function email(Request $request) {
        $request->session()->put([
                'confirmation_data_exist' => true,
                'title' => "Mail de renitialisation envoyé!",
                'body' => [
                    0 => "Nous venons de vous envoyer un mail de renitialisation!",
                    1 => "Vueillez consulter votre boite mail puis cliquer sur le lien pour renitialiser votre mot de passe."
                ],
            ]);
        return redirect()->intended($this->confirmation);
    }
}
