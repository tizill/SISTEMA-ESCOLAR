<?php

namespace App\Http\Controllers\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_turma;
use Redirect;

class UpdateTurmaController extends Controller
{
    public function update($id_turma, Request $request){
        $update = tb_turma::findOrFail($id_turma);
        $update -> update($request->all());
        return Redirect::to('/cadastros/turma');
    }
}
