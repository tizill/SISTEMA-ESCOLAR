<?php

namespace App\Http\Controllers\CreateForm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_escola;
use Redirect;

class EscolaController extends Controller
{
    public function CreateEscola(){
        return view('cadastros.formEscola');
    }
}
