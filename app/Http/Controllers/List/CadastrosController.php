<?php

namespace App\Http\Controllers\List;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_escola;

class CadastrosController extends Controller
{
    public function index(){
        $cadastros = tb_escola::get();
        return view('cadastros.list', ['cadastros' => $cadastros]);
    }
}
