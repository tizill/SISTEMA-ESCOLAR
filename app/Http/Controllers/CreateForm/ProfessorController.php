<?php

namespace App\Http\Controllers\CreateForm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_professor;
use App\Models\tb_turma;
use Redirect;

class ProfessorController extends Controller
{
     public function CreateProfessor(){
        $NomeTurma = tb_turma::get();
        return view('cadastros.formProfessor', ['NomeTurma'=>$NomeTurma]);
    }
}
