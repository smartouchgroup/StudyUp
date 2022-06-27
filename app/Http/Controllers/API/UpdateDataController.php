<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UpdateDataController extends Controller
{
    public function changeData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lastname' => 'string|required',
            'firstname' => 'string|required',
        ], [
            'required' => "Ce champ est obligatoire."
        ]);
        if (empty($request->lastname) || empty($request->firstname)) {
            return response()->json(['error' => 'Veuillez renseigner tous les champs'], 400);
        } elseif ($validator->failed()) {
            return response()->json(['error' => 'Identifiants incorrects!!!']);
        } else {
            Auth::user()->update([
                'lastname' => $request->lastname,
                'firstname' => $request->firstname,
            ]);
            return response()->json(['success' => "Vos informations ont été modifiées avec succés"], 200);
        }
    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'profile' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ], [
            'required' => "Ce champ est obligatoire."
        ]);

        $profile = $request->profile;
        $extension = strtolower(pathinfo($profile, PATHINFO_EXTENSION));
        $validation = ['jpg', 'png', 'webp', 'jpeg', 'svg'];

        if (in_array($extension, $validation)) {
            if ($request->hasFile('profile')) {
                $filename = $request->profile->hashName();
                $request->profile->store('user_profile', $filename);
                Auth::user()->update(['profile' => $filename]);
            }
            return response()->json(['success' => 'Profile changé avec succés'], 200);
        } else {
            return response()->json(['error' => 'Votre profile choisi doit être de format "png","jpeg","webp","svg","jpg" '],400);
        }

        if ($validator->failed()) {
            return response()->json(['error' => $validator]);
        }

        if ($request->hasFile('profile')) {
            $filename = $request->profile->getClientOriginalName();
            $request->profile->storeAs('user_profile', $filename, 'public');
            Auth::user()->update(['profile' => $filename]);
        }
        return response()->json(['success' => 'Profile changé avec succés'], 200);
    }


    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'string|required',
        ], [
            'required' => "Ce champ est obligatoire."
        ]);
        if ($validator->failed()) {
            return response()->json(['error' => $validator]);
        } else {
            Auth::user()->update([
                'password' => Hash::make($request->password),
                'updated_at' => Auth::user()->updated_at
            ]);
            return response()->json(['success' => 'Mot de passe  changé avec succes Vos pouvez desormais vous connectez avec votre nouveau mot de passe'], 200);
        }
    }
}
