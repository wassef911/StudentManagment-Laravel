<?php

namespace App\Http\Controllers;

use App\Enseignant;
use App\Diplome;
use App\Cour;
use Illuminate\Http\Request;

class CourController extends Controller
{
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
        $layout = 'create';
        $this->operation = '';
        return view('cour.index', compact('cours','diplomes','enseignants','layout'));
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
        $this->operation = 'create';

        $cour->save();
        return redirect('/')->with('status',  'Un cours a été créée avec succès.');
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
        $layout = 'show';
        $this->operation = '';
        return view('cour.index',compact('cours','cour', 'layout'));
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
        $layout = 'edit';
        $this->operation = '';
        return view('cour.index',compact('cours','cour','diplomes' ,'enseignants', 'layout'));
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

    return redirect('/')->with('status',  'Mis à jour cours avec succès.');
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
        $this->operation = 'delete';
        return redirect('/')->with('status', 'Un cours a été supprimé avec succès.');
    }
}
