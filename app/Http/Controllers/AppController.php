<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use App\Models\Favoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index() {
        
        $getFavoris = Favoris::where('user_id',Auth::user()->id)->first();
        $bookRecentlyAdded = Books::idDescending()->paginate(20)->fragment('books');
        $categories = Categories::all();
        $getBookByDrame = Books::where('categorie_id',1)->get();
        return view('app.home',compact('bookRecentlyAdded','categories','getBookByDrame'));
    }

    public function bookShow($id) {
        $bookShows = Books::findOrFail($id);
        return view('app.show',compact('bookShows'));
    }

    public function deconnexion(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
