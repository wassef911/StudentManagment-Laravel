<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $etudiants = Etudiant::all();
    return view('etudiant.index', ['etudiants' => $etudiants, 'layout' => 'index']);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $etudiants = Etudiant::all();
    return view('etudiant.index', ['etudiants' => $etudiants, 'layout' => 'create']);
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
    $etudiant->save();
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
    $etudiant = Etudiant::find($id);
    $etudiants = Etudiant::all();
    return view('etudiant.index', ['etudiants' => $etudiants, 'etudiant' => $etudiant, 'layout' => 'show']);
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
    return view('etudiant.index', ['etudiants' => $etudiants, 'etudiant' => $etudiant, 'layout' => 'edit']);
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
    $etudiant->save();
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
    $etudiant = Etudiant::find($id);
    $etudiant->delete();
    return redirect('/');
  }
}
