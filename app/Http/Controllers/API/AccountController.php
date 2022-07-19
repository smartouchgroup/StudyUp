<?php

namespace App\Http\Controllers\API;

use App\Models\Account;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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
        // $userAccountAmount = Account::where('user_id', Auth::user()->id)->first();
        // $getAccountAmount = $userAccountAmount->amount;
        // $depositMontant = (int)$request->amount;
        // Account::where('user_id', Auth::user()->id)->update(['amount' => $getAccountAmount +   $depositMontant]);
        // return response()->json(['success' => "Compte recharger avec succes"], 200);


        $response = Http::withHeaders([
            'Authorization' => "Bearer " . env('SMTPAY_API_KEY')
        ])->post("http://api.smt-group.net/api/payment/v1/pay", [
            'id' => 'OM',
            'customer_msisdn' => $request->phone,
            'amount' => $request->amount,
            'otp' => $request->otp_code
        ]);
        $result = json_decode((string) $response->getBody(), true);
        if(((int) $result['status']) === 200) {
            $userAccount = Account::where('user_id', Auth::user()->id)->first();
            $getAccountAmount = $userAccount->amount;
            $depositMontant = (int)$request->amount;
            Account::where('user_id', Auth::user()->id)->update(['amount' => $getAccountAmount +   $depositMontant]);
            return response()->json(['success' => "Compte recharger avec succes"], 200);
        }else{
            return response()->json(['error' => "Il y'a eu une erreur! Veuillez réessayer!"],200);
        }
    }
}
