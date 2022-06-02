<?php

namespace App\Http\Controllers\API;

use App\Models\Account;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index(){
        $userAccountAmount = Account::where('user_id', Auth::user()->id)->first();
        $getAccountAmount = $userAccountAmount->amount;
        return [
            'le montant present dans le compte est de ' => $getAccountAmount . ' ' . 'Fcfa'
        ];
    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'amount' => 'required',
            'otp_code' => 'required',
        ]);
        if ($validator->failed()) {
            return response()->json(['error' => "Veuillez renseiller vos informations correctement"], 401);
        }
        $userAccountAmount = Account::where('user_id', Auth::user()->id)->first();
        $getAccountAmount = $userAccountAmount->amount;
        $depositMontant = (int)$request->amount;
        Account::where('user_id', Auth::user()->id)->update(['amount' => $getAccountAmount +   $depositMontant]);
        return response()->json(['success' => "Compte recharger avec succes"], 200);
    }
}
