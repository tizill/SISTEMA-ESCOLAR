<?php

namespace App\Http\Controllers\CreateForm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_turma;
use App\Models\tb_escola;
use Redirect;

class TurmaController extends Controller
{
   public function CreateTurma(){
       $NomeEscola = tb_escola::get();
       return view('cadastros.formTurma', ['NomeEscola'=>$NomeEscola]);
   }
}
