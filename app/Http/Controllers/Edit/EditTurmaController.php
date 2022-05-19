<?php

namespace App\Http\Controllers\Edit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_turma;
use App\Models\tb_escola;
use Redirect;

class EditTurmaController extends Controller
{
    public function edit($id_turma){
        $editEscola = tb_escola::get(); 
        $edit = tb_turma::join('tb_escolas', 'tb_turmas.escola', '=', 'tb_escolas.id_escola')->findOrFail($id_turma);
        return view('cadastros.formTurma', ['edit' => $edit, 'editEscola'=>$editEscola]);
    }
}
