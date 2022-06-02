<?php

namespace App\Http\Controllers;

use App\Models\Notifications;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notifications::all();
        return view('notifications.notification',compact('notifications'));
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
        $request->validate([
            'message' => 'required|string|',
            'url' => 'required|string|'

        ]);
        Notifications::create([
            'message' =>request('message'),
            'url' =>request('url')
        ]);
        return redirect()->intended('notifications')->with('success',"La notification a été ajouté avec succés");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function show(Notifications $notifications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notifications = Notifications::find($id);
        return view('notifications.edit',compact('notifications'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'message' => 'required|string|',
            'url' => 'required|string|',
        ]);
        $notifications = Notifications::find($id);
        $notifications->message =  $request->get('message');
        $notifications->url =  $request->get('url');
        $notifications->save();

        return redirect()->intended('notifications')->with('success', 'La modification a été effectué avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notifications = Notifications::find($id);
        $notifications->delete();
        return back()->with('success','La suppression à été effectué avec succés');
    }
}
