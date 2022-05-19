<?php

namespace App\Http\Controllers\Delete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_turma;
use Redirect;

class DeleteTurmaController extends Controller
{
    public function delete($id_turma){
        $delete = tb_turma::findOrFail($id_turma);
        $delete -> delete();
        return Redirect::to('/cadastros/turma');
    }
}
