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
                'title' => "E-mail de réinitialisation envoyé!",
                'body' => [
                    0 => "Nous venons de vous envoyer un e-mail de rénitialisation!",
                    1 => "Veuillez consulter votre boite e-mail puis cliquer sur le lien pour réinitialiser votre mot de passe."
                ],
            ]);
        return redirect()->intended($this->confirmation);
    }
}
