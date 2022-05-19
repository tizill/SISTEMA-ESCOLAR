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
Route::get('/cadastros', [App\Http\Controllers\List\CadastrosController::class, 'index'])->middleware('auth');
Route::get('/cadastros/novo', [\App\Http\Controllers\CreateForm\EscolaController::class, 'CreateEscola'])->middleware('auth');
Route::post('/cadastros/add', [\App\Http\Controllers\Add\AddEscolaController::class, 'add'])->middleware('auth');
Route::get('/cadastros/{id}/edit', [\App\Http\Controllers\Edit\EditEscolaController::class, 'edit'])->middleware('auth');
Route::post('/cadastros/update/{id}', [\App\Http\Controllers\Update\UpdateEscolaController::class, 'update'])->middleware('auth');
Route::delete('/cadastros/delete/{id}', [\App\Http\Controllers\Delete\DeleteEscolaController::class, 'delete'])->middleware('auth');

//Route TURMA
Route::get('/cadastros/turma', [App\Http\Controllers\List\CadastrosTurmaController::class, 'index'])->middleware('auth');
Route::get('/cadastros/novo/turma', [\App\Http\Controllers\CreateForm\TurmaController::class, 'CreateTurma'])->middleware('auth');
Route::post('/cadastros/add/turma', [\App\Http\Controllers\Add\AddTurmaController::class, 'add'])->middleware('auth');
Route::get('/cadastros/{id_turma}/edit/turma', [\App\Http\Controllers\Edit\EditTurmaController::class, 'edit'])->middleware('auth');
Route::post('/cadastros/update/turma/{id}', [\App\Http\Controllers\Update\UpdateTurmaController::class, 'update'])->middleware('auth');
Route::delete('/cadastros/delete/turma/{id}', [\App\Http\Controllers\Delete\DeleteTurmaController::class, 'delete'])->middleware('auth');

//Route PROFESSOR
Route::get('/cadastros/professor', [App\Http\Controllers\List\CadastrosProfessorController::class, 'index'])->middleware('auth');
Route::get('/cadastros/novo/professor', [\App\Http\Controllers\CreateForm\ProfessorController::class, 'CreateProfessor'])->middleware('auth');
Route::post('/cadastros/add/professor', [\App\Http\Controllers\Add\AddProfessorController::class, 'add'])->middleware('auth');
Route::get('/cadastros/{id_professor}/edit/professor', [\App\Http\Controllers\Edit\EditProfessorController::class, 'edit'])->middleware('auth');
Route::post('/cadastros/update/professor/{id_professor}', [\App\Http\Controllers\Update\UpdateProfessorController::class, 'update'])->middleware('auth');
Route::delete('/cadastros/delete/professor/{id_professor}', [\App\Http\Controllers\Delete\DeleteProfessorController::class, 'delete'])->middleware('auth');



