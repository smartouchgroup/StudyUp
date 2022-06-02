<?php

namespace App\Http\Controllers;

use App\Models\Homes;
use App\Models\Notifications;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $notifications = Notifications::all();
        // return view('home.welcome',compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Homes  $homes
     * @return \Illuminate\Http\Response
     */
    public function show(Homes $homes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Homes  $homes
     * @return \Illuminate\Http\Response
     */
    public function edit(Homes $homes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Homes  $homes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homes $homes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homes  $homes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homes $homes)
    {
        //
    }
}
