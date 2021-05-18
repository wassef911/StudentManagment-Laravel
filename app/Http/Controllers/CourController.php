<?php

namespace App\Http\Controllers;

use App\Enseignant;
use App\Diplome;
use App\Cour;
use Illuminate\Http\Request;

class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cours = Cour::all();
        return view('cour.index', ['cours' => $cours, 'layout' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cours = Cour::all();
        $enseignants = Enseignant::all();
        $diplomes = Diplome::all();
        return view('cour.index', ['cours' => $cours,'diplomes' => $diplomes,'enseignants' => $enseignants, 'layout' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cour = new Cour();
        $cour->nom = $request->input('nom');
        $cour->description = $request->input('description');
        $cour->duree = $request->input('duree');
        $cour->enseignant = $request->input('enseignant');
        $cour->diplome = $request->input('diplome');

        $cour->save();
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
        $cour = Cour::find($id);
        $cours = Cour::all();
        return view('cour.index', ['cours' => $cours,'cour' => $cour,'diplomes' => $diplomes,'enseignants' => $enseignants, 'layout' => 'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cour = Cour::find($id);
        $cours = Cour::all();
        $enseignants = Enseignant::all();
        $diplomes = Diplome::all();
        return view('cour.index', ['cour' => $cour,'cours' => $cours,'diplomes' => $diplomes,'enseignants' => $enseignants, 'layout' => 'edit']);
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
        $cour = Cour::find($id);
        $cour->nom = $request->input('nom');
        $cour->description = $request->input('description');
        $cour->duree = $request->input('duree');
        $cour->enseignant = $request->input('enseignant');
        $cour->diplome = $request->input('diplome');
        $cour->save();
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
        $cour = Cour::find($id);
        $cour->delete();
        return redirect('/');
    }
}
