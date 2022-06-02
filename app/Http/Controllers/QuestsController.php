<?php

namespace App\Http\Controllers;

use App\Models\Quest;
use App\Models\Faqs;
use Illuminate\Http\Request;

class QuestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faqs::all();
        return view('home.quest', compact('faqs'));
    }
}
