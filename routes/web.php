<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','Index');

Route::view('/professeur','html.page_professeur');

Route::view('/etudiant','html.page_etudiant');

Route::view('/ajouter_utilisateur','html.ajouter_utilisateur');
Route::view('/ajouter_plateforme','html.ajouter_plateforme');
Route::view('/liste_utilisateurs','html.liste_utilisateurs');
Route::view('/liste_plateformes','html.liste_plateformes');


Route::view('/consulter_bilan','html.consulter_bilan');


Route::view('/consulter_note_admin','html.consulter_note_admin');
Route::view('/consulter_requete','html.consulter_requete');
Route::view('/emploie_temps_admin','html.emploie_temps_admin');
