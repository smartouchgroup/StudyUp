<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use App\Http\Requests\AuthorsRules;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auteurs = Authors::idDescending()->paginate(5)->fragment('authors');
        return view('authors.authors',compact('auteurs'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorsRules  $request)
    {
        $request->validated();
        Authors::create([
            'nom' =>request('nom'),
            'prenom' =>request('prenom')
        ]);
        return redirect()->intended('authors')->with('success',"L'auteur a été ajouté avec succes");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auteurs = Authors::find($id);
        return view('authors.edit',compact('auteurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorsRules $request, $id)
    {
        $request->validated();
        $auteurs = Authors::find($id);
        $auteurs->nom =  $request->get('nom');
        $auteurs->prenom =  $request->get('prenom');
        $auteurs->save();

        return redirect()->intended('authors')->with('success', 'La modification a été effectué avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function destroy( $auteurs)
    {
        $auteurs = Authors::find($auteurs);
        $auteurs->delete();
        return redirect('authors')->with('success', 'La suppression a été effectué avec succes');
    }
}
