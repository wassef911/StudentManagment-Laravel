<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Enseignant;
use App\Etudiant;
use App\Diplome;
use App\Cour;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        $cours = Cour::all();
        $enseignants = Enseignant::all();
        $diplomes = Diplome::all();
        return view('admin', compact("cours","etudiants","enseignants","diplomes"));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function getStats()
    {
        // $sql = 'SELECT COUNT(E.id),D.nom FROM etudiants E, diplomes D WHERE E.diplome = D.nom GROUP BY D.nom';
        $nbDip = DB::table('etudiants')->select("diplomes.nom", DB::raw("COUNT(etudiants.id) as nombreEtudients"))->join("diplomes", "diplomes.nom", "=", "etudiants.diplome")->groupBy("diplomes.nom")->get();
        return view('stats.index',compact("nbDip"));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
