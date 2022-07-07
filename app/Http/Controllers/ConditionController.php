<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function terms(){
        return view('terms_and_policies.terms');
    }
    public function politique(){
        return view('terms_and_policies.politique');
    }
}
