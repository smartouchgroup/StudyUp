<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AproposController extends Controller
{
    public function vue(){
        return view('home.a_propos');
    }
}
