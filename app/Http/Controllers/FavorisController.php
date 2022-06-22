<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Favoris;
use App\Models\PaymentBook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavorisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        $biblios = PaymentBook::where('user_id',Auth::user()->id)->get();
        // dd($biblios );
        return view('favoris.index', compact('categories','biblios'));
    }
    public function store(Request $request)
    {

        Favoris::create([
            'category_id' => json_encode($request->category_id),
            'user_id' => Auth::user()->id
        ]);
        Auth::user()->update([
            'first_login' => true
        ]);
        return redirect()->route('app.index');
    }
    
}
