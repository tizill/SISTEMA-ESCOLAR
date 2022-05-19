<?php

namespace App\Http\Controllers\Delete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_professor;
use Redirect;

class DeleteProfessorController extends Controller
{
    public function delete($id_professor){
        $delete = tb_professor::findOrFail($id_professor);
        $delete -> delete();
        return Redirect::to('/cadastros/professor');
    }
}
