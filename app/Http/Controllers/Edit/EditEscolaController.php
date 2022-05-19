<?php

namespace App\Http\Controllers\Edit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_escola;
use Redirect;

class EditEscolaController extends Controller
{
    public function edit($id){
        $edit = tb_escola::findOrFail($id);
        return view('cadastros.formEscola', ['edit' => $edit]);
    }
}
