<?php

namespace App\Http\Controllers;

use App\Models\Languages;
use Illuminate\Http\Request;
class LanguagesController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Languages::idDescending()->paginate(5)->fragment('editors');
        return view('language.language', compact('languages'));

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
        	'langue'=>['required','string'],
            'icone' => ['image'],
        ]);
        $input = $request->all();
        if ($image = $request->file('icone')) {
            $destinationPath = 'image/';
            $iconeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $iconeImage);
            $input['icone'] = "$iconeImage";
        }
       Languages::create($input);
        return redirect()->intended('language')->with('success', 'Ajout reussi avec succes!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Languages  $languages
     * @return \Illuminate\Http\Response
     */
    public function show(Languages $languages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Languages  $languages
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $languages = Languages::find($id);
        return view('language.edit', compact('languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Languages  $languages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Languages $languages)
    {
        $request->validate([
            'langue' => ['required','string'],
            'icone' => '|image|',
        ]);
        $input = [];
        $input['langue'] = $request->input('langue');
        if ($image = $request->file('icone')) {
            $destinationPath = 'image/';
            $iconeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $iconeImage);
            $input['icone'] = $iconeImage;
        } else {
            unset($input['icone']);
        }
        $languages->where('id', $request->input('langueId'))->update($input);
        return redirect()->intended('language')->with('success', 'La modification effectuée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Languages  $languages
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $languages = Languages::find($id);
        $languages->delete();
        return redirect('language')->with('success', 'Suppression reussi!');
    }
}
