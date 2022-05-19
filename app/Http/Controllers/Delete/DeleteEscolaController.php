<?php

namespace App\Http\Controllers\Delete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_escola;
use Redirect;

class DeleteEscolaController extends Controller
{
    public function delete($id){
        $delete = tb_escola::findOrFail($id);
        $delete -> delete();
        return Redirect::to('/cadastros');
    }
}
