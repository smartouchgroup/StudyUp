<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\PaymentBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class paymentBookController extends Controller
{
    public function index()
    {
        $biblios = PaymentBook::where('user_id',Auth::user()->id)->get();
        $userAccountAmount = Account::where('user_id', Auth::user()->id)->first();
        $getAccountAmount = $userAccountAmount->amount;
        return view('favoris.index', compact('biblios'));
    }

    public function store(Request $request){
        $userAccountAmount = Account::where('user_id', Auth::user()->id)->first();
        $getAccountAmount = $userAccountAmount->amount;
        $getBookPrice = $request->price;
        if ($getAccountAmount === 0 || $getAccountAmount < $getBookPrice) {
            return back()->with('message','Compte insufisant!!! veuillez recharger le recharger');
        }else{
            PaymentBook::create([
                'user_id' =>$request->user_id,
                'book_id' => $request->book_id,
                'price' => $request->price,
                'status' => 1
            ]);
            Account::where('user_id', Auth::user()->id)->update(['amount' => $getAccountAmount -  $getBookPrice]);
            return back()->with('message','Achat effectué avec succés');
        }
    }
}
