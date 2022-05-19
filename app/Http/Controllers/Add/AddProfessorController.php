<?php

namespace App\Http\Controllers\Add;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_professor;
use Redirect;

class AddProfessorController extends Controller
{
    public function add(Request $request){
        tb_professor:: create([
            'nomeP' => $request->nome,
            'cpf' => $request->cpf,
            'turma'=>$request->turma,
        ]);

        return Redirect::to('/cadastros/professor');
    }
}
