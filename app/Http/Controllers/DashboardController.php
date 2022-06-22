<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $books = Books::all();
        $users = User::all();
        $articles = Books::all();
        return view('layouts.Admin',compact('books','users','articles'));
    }
}
