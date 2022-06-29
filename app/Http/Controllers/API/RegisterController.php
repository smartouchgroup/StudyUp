<?php

namespace App\Http\Controllers\API;

use App\Models\Account;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email',  'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'same:password-confirm'],
        ]);

        if ($validator->failed()) {
            return response()->json(['error' => "Veuillez renseiller vos informations correctement"], 401);
        }
        $getEmail = User::where('email',$request->input('email'))->exists();
        if ($getEmail) {
            return response()->json(['error' => "Ce email exist déjà"], 401);
        }
        $user =   User::create([
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
        // $token =  $user->createToken('MyAuthApp')->plainTextToken;

        $response = [
            'user' => $user,
            // 'token' => $token,
        ];
        return response($response,200);
    }
}
