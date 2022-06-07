<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\FavorisResource;
use App\Models\Favoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavorisController extends Controller
{
    public function getFavoris(){
        $getFavoris = Favoris::where('user_id',Auth::user()->id)->get();
        return FavorisResource::collection($getFavoris);
    }
    public function store(Request $request)
    {
        Favoris::create([
            'user_id' =>$request->user_id,
            'book_id' => $request->book_id,
        ]);
        return response()->json(['message' => "Ajout du livre à été un succès"], 200);
    }
}
