<?php

namespace App\Http\Controllers;

use App\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $enseignants = Enseignant::all();
    $layout='create';
    return view('enseignant.index', compact('enseignants','layout'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $enseignant = new Enseignant();
    $enseignant->cin = $request->input('cin');
    $enseignant->nom = $request->input('nom');
    $enseignant->prenom = $request->input('prenom');
    $enseignant->tel = $request->input('tel');
    $enseignant->mail = $request->input('mail');
    $enseignant->numbur = $request->input('numbur');
    $enseignant->grade = $request->input('grade');
    $request->validate([
      'cin'=> 'min:3|required',
      'nom'=>'required',
      'prenom'=>'required',
      'tel'=>'required',
      'mail'=>'required',
      'numbur'=>'required',
      'grade'=>'required'
  ]);
    $enseignant->save();
    return redirect('/')->with('status',  'Un enseignant a été créée avec succès.');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $enseignant = Enseignant::find($id);
    $enseignants = Enseignant::all();
    $layout='show';
    return view('enseignant.index', compact('enseignants','enseignant','layout')); 
   }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $enseignant = Enseignant::find($id);
    $enseignants = Enseignant::all();
    $layout='edit';
    return view('enseignant.index', compact('enseignants','enseignant','layout')); 
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
    $enseignant = Enseignant::find($id);
    $enseignant->cin = $request->input('cin');
    $enseignant->nom = $request->input('nom');
    $enseignant->prenom = $request->input('prenom');
    $request->validate([
      'cin'=> 'min:3|required',
      'nom'=>'required',
      'prenom'=>'required'
  ]);
    $enseignant->save();
    return redirect('/')->with('status', 'Mis à jour enseignants avec succès.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $enseignant = Enseignant::find($id);
    $enseignant->delete();
    return redirect('/')->with('status', 'Un enseignant a été supprimé avec succès.');
  }
}
