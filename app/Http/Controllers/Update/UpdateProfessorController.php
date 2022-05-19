<?php

namespace App\Http\Controllers\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_professor;
use Redirect;

class UpdateProfessorController extends Controller
{
    public function update($id_professor, Request $request){
        $update = tb_professor::findOrFail($id_professor);
        $update -> update($request->all());
        return Redirect::to('/cadastros/professor');
    }
}
