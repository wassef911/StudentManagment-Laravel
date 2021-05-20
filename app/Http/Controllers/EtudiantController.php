<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $etudiants = Etudiant::all();
    $layout='create';
    return view('etudiant.index', compact('etudiants','layout'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $etudiant = new Etudiant();
    $etudiant->cin = $request->input('cin');
    $etudiant->nom = $request->input('nom');
    $etudiant->prenom = $request->input('prenom');
    $etudiant->age = $request->input('age');
    $etudiant->diplome = $request->input('diplome');
    $etudiant->mail = $request->input('mail');
    $etudiant->group = $request->input('group');
    $etudiant->mdp = $request->input('mdp');
    $etudiant->login = $request->input('login');
    $etudiant->tel = $request->input('tel');
    $request->validate([
      'cin'=> 'min:3|required',
      'nom'=>'required',
      'prenom'=>'required',
      'age'=>'required',
      'tel'=>'required',
      'diplome'=>'required',
      'mail'=>'required',
      'login'=>'required',
      'numbur'=>'required',
      'grade'=>'required'
  ]);
    $etudiant->save();
    return redirect('/')->with('status',  'Un etudiant a été créée avec succès.');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $etudiant = Etudiant::find($id);
    $etudiants = Etudiant::all();
    $layout='show';
    return view('etudiant.index', compact('etudiants','etudiant','layout'));  
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $etudiant = Etudiant::find($id);
    $etudiants = Etudiant::all();
    $layout='edit';
    return view('etudiant.index', compact('etudiants','etudiant','layout'));  
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
    $etudiant = Etudiant::find($id);
    $etudiant->cin = $request->input('cin');
    $etudiant->nom = $request->input('nom');
    $etudiant->prenom = $request->input('prenom');
    $etudiant->age = $request->input('age');
    $etudiant->diplome = $request->input('diplome');
    $request->validate([
      'cin'=> 'min:3|required',
      'nom'=>'required',
      'prenom'=>'required',
      'age'=>'required',
      'diplome'=>'required',
  ]);
    $etudiant->save();
    return redirect('/')->with('status', 'Mis à jour etudiants avec succès.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $etudiant = Etudiant::find($id);
    $etudiant->delete();
    return redirect('/')->with('status', 'Un etudiant a été supprimé avec succès.');
  }
}
