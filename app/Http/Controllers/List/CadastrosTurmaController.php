<?php

namespace App\Http\Controllers\List;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_turma;

class CadastrosTurmaController extends Controller
{
    public function index(){
        $cadastros = tb_turma::join('tb_escolas', 'tb_turmas.escola', '=', 'tb_escolas.id_escola')->get();
        return view('cadastros.listTurma', ['cadastros' => $cadastros]);
     } 
}
