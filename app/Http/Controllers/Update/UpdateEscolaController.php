<?php

namespace App\Http\Controllers\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_escola;
use Redirect;

class UpdateEscolaController extends Controller
{
    public function update($id, Request $request){
        $update = tb_escola::findOrFail($id);
        $update -> update($request->all());
        return Redirect::to('/cadastros');
    }

}
