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

Route::get('/','HomeController@loginIndex');

Route::get('/ajouter_utilisateur','RouteController@goTo_ajouter_utilisateur');

Route::get('/liste_utilisateurs','RouteController@goTo_liste_utilisateurs');
Route::get('/ajouter_plateforme','RouteController@goTo_ajouter_plateforme');
Route::get('/liste_plateformes','RouteController@goTo_liste_plateformes');

Route::get('/consulter_bilan','RouteController@goTo_consulter_bilan');

Route::get('/consulter_requete','RouteController@goTo_consulter_requete');
Route::get('/consulter_note_admin','RouteController@goTo_consulter_note_admin');
Route::get('/emploie_temps_admin','RouteController@goTo_emploie_temps_admin');

Route::get('/page_etudiant','RouteController@goTo_page_etudiant');

Route::get('/page_professeur','RouteController@goTo_page_professeur');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
