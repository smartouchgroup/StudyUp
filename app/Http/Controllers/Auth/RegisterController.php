<?php

namespace App\Http\Controllers\Auth;

use App\Models\Account;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function index()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'same:email-confirm', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'same:password-confirm'],
        ]);
       $user = User::create([
            'firstname' => $request->input('firstname'),
            'role_id' => 2,
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        Account::create([
            'amount' => 0,
            'user_id' => $user->id,
        ]);
        return redirect()->back()->with('success', 'Votre enregistrement a été un succès');

    }
}
