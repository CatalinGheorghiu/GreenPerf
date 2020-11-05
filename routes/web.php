<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes([
    "register" => false
]);



Route::get('/', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show']]);
});

Route::resource('indicateurs', 'IndicateurController');
Route::resource('sites', 'SiteController');
Route::resource('locaux', 'LocalController');
Route::resource('equipements', 'EquipementController');
Route::resource('famille_equipements', 'FamilleEquipementController');
Route::resource('calendriers_scolaire', 'CalendrierScolaireController');
Route::resource('fermetures', 'FermetureController');
Route::resource('taux_disponibilites', 'TauxDisponibiliteController');
Route::resource('niveaux_retenues', 'NiveauRetenueController');
Route::resource('temps_retablissements', 'TempRetablissementController');
Route::resource('reactivites', 'ReactiviteController');
Route::resource('periodicites', 'PeriodiciteController');
Route::resource('periodes', 'PeriodeController');
Route::resource('operations', 'OperationController');
Route::resource('valeurs_indicateurs', 'ValeurIndicateurController');
