<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "AdminController@index");
Route::get('/getStats', "AdminController@getStats");

Route::get('/edit/etudiant/{id}', "EtudiantController@edit");
Route::get('/show/etudiant/{id}', "EtudiantController@show");
Route::get('/create/etudiant', "EtudiantController@create");
Route::get('/destroy/etudiant/{id}', "EtudiantController@destroy");
Route::post('/store/etudiant', "EtudiantController@store");
Route::post('/update/etudiant/{id}', "EtudiantController@update");


Route::get('/edit/enseignant/{id}', "EnseignantController@edit");
Route::get('/show/enseignant/{id}', "EnseignantController@show");
Route::get('/create/enseignant', "EnseignantController@create");
Route::get('/destroy/enseignant/{id}', "EnseignantController@destroy");
Route::post('/store/enseignant', "EnseignantController@store");
Route::post('/update/enseignant/{id}', "EnseignantController@update");

Route::get('/edit/diplome/{id}', "DiplomeController@edit");
Route::get('/show/diplome/{id}', "DiplomeController@show");
Route::get('/create/diplome', "DiplomeController@create");
Route::get('/destroy/diplome/{id}', "DiplomeController@destroy");
Route::post('/store/diplome', "DiplomeController@store");
Route::post('/update/diplome/{id}', "DiplomeController@update");

Route::get('/edit/cour/{id}', "CourController@edit");
Route::get('/show/cour/{id}', "CourController@show");
Route::get('/create/cour', "CourController@create");
Route::get('/destroy/cour/{id}', "CourController@destroy");
Route::post('/store/cour', "CourController@store");
Route::post('/update/cour/{id}', "CourController@update");

/*
Route::get('/', function () {
    return view('ahla wasahla');
});
*/


