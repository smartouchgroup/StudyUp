<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::all();
        return view('articles.articles',compact('articles'));
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
    public function store(Request $request )
    {
        $request->validate([
            'titre' => 'required|string|',
            'color' => 'required|string|',
            'contenu' => 'required|string|',
            'photo' => '|image|',
            'last_article' => 'string',
        ]);
        $input = $request->all();
        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $picture = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $picture);
            $input['photo'] = "$picture";
        }
        Articles::create($input);
        return redirect()->intended('articles')->with('success', "L'article a été ajouté avec succes");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $articles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Articles::find($id);
        return view('articles.edit',compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $articles)
    {
        $request->validate([
            'titre' => 'required|string|',
            'color' => 'required|string|',
            'contenu' => 'required|string|',
            'photo' => 'required|image|',
        ]);

        $input = [];
        $input['titre'] = $request->input('titre');
        $input['color'] = $request->input('color');
        $input['contenu'] = $request->input('contenu');

        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $picture = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $picture);
            $input['photo'] = $picture;
        }else{
            unset($input['photo']);
        }

        $articles->where('id', $request->input('articleId'))->update($input);

        return redirect()->intended('articles')->with('success', 'La modification a été effectué avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articles = Articles::find($id);
        $articles->delete();
        return redirect('articles')->with('success', 'La suppression a été effectué avec succes');
    }
}
