<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Books;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $books = Books::all();
        $articles = Articles::all();
        $messages = Contact::all();
        $users = User::where('id','!=', 1)->paginate(10);
        return view('layouts.Admin',compact('books','users','articles','messages'));
    }
}
