<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if ($validator->failed()) {
            return response()->json(['error' => "Veuillez renseiller vos informations correctement"], 401);
        }
          if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['error' => "Vos identifiants sont incorrects"], 401);
        } else if ((int) Auth::user()->role_id !== 2) {
            return response()->json(['error' => "Accès non autorisé!"], 401);
        }

        $token = auth()->user()->createToken('auth_token');
        return response()->json([
            'auth_token' => $token->plainTextToken,
            'user' => auth()->user()
        ]);
    }
}
