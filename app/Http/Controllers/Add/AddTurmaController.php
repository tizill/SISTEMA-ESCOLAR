<?php

namespace App\Http\Controllers\Add;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_turma;
use Redirect;

class AddTurmaController extends Controller
{
    public function add(Request $request){
        tb_turma:: create([
            'nomeT' => $request->nome,
            'status' => $request->status,
            'escola'=>$request->escola,
        ]);

        return Redirect::to('/cadastros/turma');
    }
}
