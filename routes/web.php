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

Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

//Route ESCOLA
Route::get('/cadastros', [App\Http\Controllers\EscolaController::class, 'index'])->middleware('auth');
Route::get('/cadastros/novo', [\App\Http\Controllers\EscolaController::class, 'store'])->middleware('auth');
Route::post('/cadastros/add', [\App\Http\Controllers\EscolaController::class, 'create'])->middleware('auth');
Route::get('/cadastros/{id}/edit', [\App\Http\Controllers\EscolaController::class, 'edit'])->middleware('auth');
Route::post('/cadastros/update/{id}', [\App\Http\Controllers\EscolaController::class, 'update'])->middleware('auth');
Route::delete('/cadastros/delete/{id}', [\App\Http\Controllers\EscolaController::class, 'destroy'])->middleware('auth');

//Route TURMA
Route::get('/cadastros/turma', [App\Http\Controllers\TurmaController::class, 'index'])->middleware('auth');
Route::get('/cadastros/novo/turma', [\App\Http\Controllers\TurmaController::class, 'store'])->middleware('auth');
Route::post('/cadastros/add/turma', [\App\Http\Controllers\TurmaController::class, 'create'])->middleware('auth');
Route::get('/cadastros/{id_turma}/edit/turma', [\App\Http\Controllers\TurmaController::class, 'edit'])->middleware('auth');
Route::post('/cadastros/update/turma/{id}', [\App\Http\Controllers\TurmaController::class, 'update'])->middleware('auth');
Route::delete('/cadastros/delete/turma/{id}', [\App\Http\Controllers\TurmaController::class, 'destroy'])->middleware('auth');

//Route PROFESSOR
Route::get('/cadastros/professor', [App\Http\Controllers\ProfessorController::class, 'index'])->middleware('auth');
Route::get('/cadastros/novo/professor', [\App\Http\Controllers\ProfessorController::class, 'store'])->middleware('auth');
Route::post('/cadastros/add/professor', [\App\Http\Controllers\ProfessorController::class, 'create'])->middleware('auth');
Route::get('/cadastros/{id_professor}/edit/professor', [\App\Http\Controllers\ProfessorController::class, 'edit'])->middleware('auth');
Route::post('/cadastros/update/professor/{id_professor}', [\App\Http\Controllers\ProfessorController::class, 'update'])->middleware('auth');
Route::delete('/cadastros/delete/professor/{id_professor}', [\App\Http\Controllers\ProfessorController::class, 'destroy'])->middleware('auth');



