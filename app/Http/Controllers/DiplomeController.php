<?php

namespace App\Http\Controllers;

use App\Diplome;
use Illuminate\Http\Request;

class DiplomeController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diplomes = Diplome::all();
        $layout='create';
        return view('diplome.index',  compact('diplomes','layout'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diplome = new Diplome();
        $diplome->nom = $request->input('nom');
        $diplome->description = $request->input('description');
        $diplome->save();
        return redirect('/')->with('status',  'Une diplome a été créée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diplome = Diplome::find($id);
        $diplomes = Diplome::all();
        $layout='show';
        return view('diplome.index',  compact('diplomes','diplome','layout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diplome = Diplome::find($id);
        $diplomes = Diplome::all();
        $layout='edit';
        return view('diplome.index',  compact('diplomes','diplome','layout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $diplome = Diplome::find($id);
        $diplome->nom = $request->input('nom');
        $diplome->description = $request->input('description');
        $diplome->save();
        return redirect('/')->with('status', 'Mis à jour diplomes avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diplome = Diplome::find($id);
        $diplome->delete();
        return redirect('/')->with('status', 'Une diplome a été supprimé avec succès.');
    }
}
