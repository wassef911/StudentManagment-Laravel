<?php

namespace App\Http\Controllers;

use App\Diplome;
use Illuminate\Http\Request;

class DiplomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diplomes = Diplome::all();
        return view('diplome.index', ['diplomes' => $diplomes, 'layout' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diplomes = Diplome::all();
        return view('diplome.index', ['diplomes' => $diplomes, 'layout' => 'create']);
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
        return redirect('/');
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
        return view('diplome.index', ['diplomes' => $diplomes, 'diplome' => $diplome, 'layout' => 'show']);
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
        return view('diplome.index', ['diplomes' => $diplomes, 'diplome' => $diplome, 'layout' => 'edit']);
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
        return redirect('/');
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
        return redirect('/');
    }
}
