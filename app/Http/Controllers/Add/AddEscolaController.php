<?php

namespace App\Http\Controllers\Add;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_escola;
use Redirect;

class AddEscolaController extends Controller
{
    public function add(Request $request){
        tb_escola:: create([
            'nomeE' => $request->nome,
            'uf' => $request->uf,
            'cnpj'=>$request->cnpj,
        ]);

        return Redirect::to('/cadastros');
    }
}
