<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => '/','middleware'=>'auth'], function () {

    Route::get('/liste_utilisateurs','UserController@index')->name('liste_utilisateurs');
    Route::get('/ajouter_utilisateur','UserController@create')->name('ajouter_utilisateur');
    Route::post('/ajouter_utilisateur','UserController@store')->name('ajouter_utilisateur');
    Route::get('/modifier_utilisateur/{id}','UserController@edit')->name('modifier_utilisateur');
    Route::post('/modifier_utilisateur/{id}','UserController@update')->name('modifier_utilisateur');
    Route::delete('/supprimer_utilisateur/{id}','UserController@destroy')->name('supprimer_utilisateur');
    Route::get('/ajouter_plateforme','RouteController@goTo_ajouter_plateforme')->name('ajouter_plateforme');
    Route::get('/liste_plateformes','RouteController@goTo_liste_plateformes')->name('liste_plateformes');

    Route::get('/consulter_bilan','RouteController@goTo_consulter_bilan')->name('consulter_bilan');

    Route::get('/consulter_requete','RouteController@goTo_consulter_requete')->name('consulter_requete');
    Route::get('/consulter_note_admin','RouteController@goTo_consulter_note_admin')->name('consulter_note_admin');
    Route::get('/emploie_temps_admin','RouteController@goTo_emploie_temps_admin')->name('emploie_temps_admin');

    Route::get('/page_etudiant','RouteController@goTo_page_etudiant')->name('page_etudiant');

    Route::get('/page_professeur','RouteController@goTo_page_professeur')->name('page_professeur');
    Route::get('/cours/details/{id}','CoursController@detailCours')->name('cours.details');

    Route::post('/evaluation/store','EvaluationController@store')->name('addEva');
    Route::post('/evaluation/addTime','EvaluationController@addTime')->name('addTime');
    Route::post('/evaluation/submitEva','EvaluationController@submitEva')->name('submitEva');
    Route::get('/evaluation/delete/{id}','EvaluationController@delete')->name('deleteEva');

    Route::post('/messages/{espace}/store','MessageController@store')->name('messages.store');
    Route::get('/messages/{id}/get/xhr','MessageController@getMessagesXhr')->name('messages.get.xhr');

    Route::post('/cours/store','CoursController@store')->name('cours.store');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
