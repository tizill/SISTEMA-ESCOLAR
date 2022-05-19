<?php

namespace App\Http\Controllers\Edit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_professor;
use App\Models\tb_turma;
use Redirect;

class EditProfessorController extends Controller
{
    public function edit($id_professor){
        $editTurma = tb_turma::get(); 
        $edit = tb_professor::findOrFail($id_professor);
        return view('cadastros.formProfessor', ['edit' => $edit, 'editTurma'=>$editTurma]);
    }
}
