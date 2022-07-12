<?php

namespace App\Http\Controllers\API;

use App\Models\Account;
use App\Http\Controllers\Controller;
use App\Http\Resources\BiblioResource;
use App\Models\PaymentBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class paymentBookController extends Controller
{
    public function index()
    {
        $biblios = PaymentBook::where('user_id',Auth::user()->id)->get();
        return BiblioResource::collection($biblios);
    }


    public function store(Request $request){
        $userAccountAmount = Account::where('user_id', Auth::user()->id)->first();
        $getAccountAmount = $userAccountAmount->amount;
        $getBookPrice = $request->price;
        if ($getAccountAmount === 0 || $getAccountAmount < $getBookPrice) {
            return response()->json(['message' => "Compte insufisant!!! veuillez recharger le recharger"], 200);
        }else{
            PaymentBook::create([
                'user_id' =>$request->user_id,
                'book_id' => $request->book_id,
                'price' => $request->price,
            ]);
            Account::where('user_id', Auth::user()->id)->update(['amount' => $getAccountAmount -  $getBookPrice]);
            return response()->json(['message' => "Achat effectué avec succés"], 200);
        }
    }
    public function deletePayment($id){
        $deletePaymentBook = PaymentBook::find($id);
        $deletePaymentBook->delete();
        return response()->json(['message' => "Vous avez retiré ce livre"], 200);
    }

}

