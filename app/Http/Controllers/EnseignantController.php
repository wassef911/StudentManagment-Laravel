<?php

namespace App\Http\Controllers;

use App\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $enseignants = Enseignant::all();
    return view('enseignant.index', ['enseignants' => $enseignants, 'layout' => 'index']);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $enseignants = Enseignant::all();
    return view('enseignant.index', ['enseignants' => $enseignants, 'layout' => 'create']);
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
    $enseignant->save();
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
    $enseignant = Enseignant::find($id);
    $enseignants = Enseignant::all();
    return view('enseignant.index', ['enseignants' => $enseignants, 'enseignant' => $enseignant, 'layout' => 'show']);
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
    return view('enseignant.index', ['enseignants' => $enseignants, 'enseignant' => $enseignant, 'layout' => 'edit']);
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
    $enseignant->save();
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
    $enseignant = Enseignant::find($id);
    $enseignant->delete();
    return redirect('/');
  }
}
