<?php

namespace App\Http\Controllers;

use App\Models\Editors;
use Illuminate\Http\Request;

class EditorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editors = Editors::idDescending()->paginate(5)->fragment('editors');
        return view('editors.editors', compact('editors'));
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
            'nom' => 'required|string|',
            'icone' => 'image',
        ]);
        $input = $request->all();
        if ($image = $request->file('icone')) {
            $destinationPath = 'image/';
            $iconeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $iconeImage);
            $input['icone'] = "$iconeImage";
        }
        Editors::create($input);
        return redirect()->intended('editors')->with('success', 'La catégorie a été ajouté avec succes');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Editors  $editors
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editeurs = Editors::find($id);
        return view('editors.edit', compact('editeurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Editors  $editors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editors $editors)
    {
        $request->validate([
            'nom' => 'required|string|',
            'icone' => '|image|',
        ]);

        $input = [];
        $input['nom'] = $request->input('nom');

        if ($image = $request->file('icone')) {
            $destinationPath = 'image/';
            $iconeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $iconeImage);
            $input['icone'] = $iconeImage;
        }else{
            unset($input['icone']);
        }

        $editors->where('id', $request->input('editorId'))->update($input);

        return redirect()->intended('editors')->with('success', 'La modification a été effectué avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Editors  $editors
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editeurs = Editors::find($id);
        $editeurs->delete();
        return redirect('editors')->with('success', 'La suppression a été effectué avec succes');
    }
}
