<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $last_articles =Articles::where('last_article','on')->get();
        $articles = Articles::where('last_article')->get();
        return view('home.blog',compact('articles','last_articles'));
    }

}
