<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('home.contacts');
    }
    public function adminIndex()
    {
        $messages = Contact::all();
        return view('messages.index',compact('messages'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message'=> 'required|string'
        ]);
        $inputs = $request->all();
        Contact::create($inputs);
        return back()->with('success','Message envoyé');
    }

    public function destroy($id)
    {
        $message = Contact::find($id);
        $message->delete();
        return back()->with('success', 'La suppression a été effectué avec succes');
    }
}
