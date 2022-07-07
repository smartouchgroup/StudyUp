<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.index');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'amount' => 'required',
            'otp_code' => 'required',
        ]);

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
            return redirect()->back()->with("success", "Votre dépôt a été un succès!");
        }else{
            return redirect()->back()->with('error', "Il y'a eu une erreur!Veuillez réessayer!");
        }
    }
}
