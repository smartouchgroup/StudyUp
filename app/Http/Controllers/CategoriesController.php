<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::idDescending()->paginate(5)->fragment('categories');
        return view('categories.categories', compact('categories'));
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
            'categorie' => 'required|string|',
            'icone' => 'required|image|',
        ]);
        $input = $request->all();
        if ($image = $request->file('icone')) {
            $destinationPath = 'image/';
            $iconeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $iconeImage);
            $input['icone'] = "$iconeImage";
        }
        Categories::create($input);
        return redirect()->intended('categories')->with('success', 'La catégorie a été ajouté avec succès');
    }

    public function edit($id)
    {
        $categories = Categories::find($id);
        return view('categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories)
    {
        $request->validate([
            'categorie' => 'required|string|',
            'icone' => '|image|',
        ]);
        $input = [];
        $input['categorie'] = $request->input('categorie');

        if ($image = $request->file('icone')) {
            $destinationPath = 'image/';
            $iconeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $iconeImage);
            $input['icone'] = $iconeImage;
        } else {
            unset($input['icone']);
        }

        $categories->where('id', $request->input('categorieId'))->update($input);

        return redirect()->intended('categories')->with('success', 'La modification a été effectué avec succes');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($categories)
    {
        $categories = Categories::find($categories);
        $categories->delete();
        return redirect('categories')->with('success', 'La suppression a été effectué avec succes');
    }
}
