<?php

namespace App\Http\Controllers\List;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_professor;

class CadastrosProfessorController extends Controller
{
    public function index(){
        $cadastros = tb_professor::join('tb_turmas', 'tb_professors.turma', '=', 'tb_turmas.id_turma')->get();
        return view('cadastros.listProfessor', ['cadastros' => $cadastros]);
     } 
}
