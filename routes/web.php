<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('respuestas',RespuestaController::class);

Route::resource('usuarios', UserController::class,);

Route::resource('lugares', LugarController::class);

Route::resource('carreras',CarreraController::class);

Route::resource('conferencias',ConferenciaController::class);

Route::resource('encuestas',EncuestaController::class);

Route::resource('feedback',FeedbackController::class);

Route::resource('participacion',ParticipacionController::class);

Route::resource('estudiantes',EstudianteController::class);

Route::resource('respuestas',RespuestaController::class);

Route::resource('conferencistas',ConferencistaController::class);

Route::get('/Contaduria', function () {
    return view('Contaduria.index');
});

//lugares- IMAGE CRUD
Route::get('Registrar Lugares',[App\Http\Controllers\LugarController::class,'create']);
Route::post('Registrar Lugares',[App\Http\Controllers\LugarController::class,'store']);
Route::get('edit-lugares/{id}',[App\Http\Controllers\LugarController::class,'edit']);
Route::put('update-lugares/{id}',[App\Http\Controllers\LugarController::class,'update']);
//Route::get('delete-lugares/{id}',[App\Http\Controllers\LugarController::class,'destroy']);
Route::delete('delete-lugares/{id}',[App\Http\Controllers\LugarController::class,'destroy']);
//carreras- IMAGE CRUD
Route::get('Registrar Carreras',[App\Http\Controllers\CarreraController::class,'create']);
Route::post('Registrar Carreras',[App\Http\Controllers\CarreraController::class,'store']);
Route::get('edit-carreras/{id}',[App\Http\Controllers\CarreraController::class,'edit']);
Route::put('update-carreras/{id}',[App\Http\Controllers\CarreraController::class,'update']);
//Route::get('delete-carreras/{id}',[App\Http\Controllers\CarreraController::class,'destroy']);
Route::delete('delete-carreras/{id}',[App\Http\Controllers\CarreraController::class,'destroy']);

//conferencistas- IMAGE CRUD
Route::get('Registrar Conferencistas',[App\Http\Controllers\ConferencistaController::class,'create']);
Route::post('Registrar Conferencistas',[App\Http\Controllers\ConferencistaController::class,'store']);
Route::get('edit-conferencistas/{id}',[App\Http\Controllers\ConferencistaController::class,'edit']);
Route::put('update-conferencistas/{id}',[App\Http\Controllers\ConferencistaController::class,'update']);
//Route::get('delete-conferencistas/{id}',[App\Http\Controllers\ConferencistaController::class,'destroy']);
Route::delete('delete-conferencistas/{id}',[App\Http\Controllers\ConferencistaController::class,'destroy']);

//usuarios- IMAGE CRUD
Route::get('Registrar Usuario',[App\Http\Controllers\UserController::class,'create']);
Route::post('Registrar Usuario',[App\Http\Controllers\UserController::class,'store']);
Route::get('edit-users/{id}',[App\Http\Controllers\UserController::class,'edit']);
Route::put('update-users/{id}',[App\Http\Controllers\UserController::class,'update']);
//Route::get('delete-users/{id}',[App\Http\Controllers\UserController::class,'destroy']);
Route::delete('delete-users/{id}',[App\Http\Controllers\UserController::class,'destroy']);


//Conferencia- IMAGE CRUD
Route::get('Registrar Conferencias',[App\Http\Controllers\ConferenciaController::class,'create']);
Route::post('Registrar Conferencias',[App\Http\Controllers\ConferenciaController::class,'store']);
Route::get('edit-conferencias/{id}',[App\Http\Controllers\ConferenciaController::class,'edit']);
Route::put('update-conferencias/{id}',[App\Http\Controllers\ConferenciaController::class,'update']);
//Route::get('delete-conferencias/{id}',[App\Http\Controllers\ConferenciaController::class,'destroy']);
Route::delete('delete-conferencias/{id}',[App\Http\Controllers\ConferenciaController::class,'destroy']);



