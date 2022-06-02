<?php

namespace App\Http\Controllers;
use App\Models\Countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Countries::idDescending()->paginate(5)->fragment('countries');
        return view('countrie.countrie', compact('countries'));
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
        	'pays'=>['required','string'],
            'icone' => ['image'],
        ]);
        $input = $request->all();
        if ($image = $request->file('icone')) {
            $destinationPath = 'image/';
            $iconeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $iconeImage);
            $input['icone'] = "$iconeImage";
        }
       Countries::create($input);
        return redirect()->intended('countrie')->with('success', 'Ajout reussi avec succes!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Countries  $countries
     * @return \Illuminate\Http\Response
     */
        public function edit($id)
        {
            $countries = Countries::find($id);
            return view('countrie.edit', compact('countries'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Countries $countries)
    {
        $request->validate([
            'pays' => ['required','string'],
            'icone' => '|image|',
        ]);
        $input = [];
        $input['pays'] = $request->input('pays');
        if ($image = $request->file('icone')) {
            $destinationPath = 'image/';
            $iconeImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $iconeImage);
            $input['icone'] = $iconeImage;
        } else {
            unset($input['icone']);
        }
        $countries->where('id', $request->input('countrieId'))->update($input);
        return redirect()->intended('countrie')->with('success', 'La modification effectuée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $countries = Countries::find($id);
        $countries->delete();
        return redirect('countrie')->with('success', 'Suppression reussi!');
    }
}
