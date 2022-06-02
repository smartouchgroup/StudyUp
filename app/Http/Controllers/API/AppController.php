<?php

namespace App\Http\Controllers\API;

use App\Models\Books;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $bookRecentlyAdded = Books::all();
        return BookResource::collection($bookRecentlyAdded);
    }
    public function deconnexion(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'success' => "Deconnexion effectuée avec succès"
        ], 200);
    }
    public function getCategories(){
        $getCategories = Categories::all();
        return $getCategories ;
    }
}
