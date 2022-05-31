<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        tb_turma:: create([
            'nomeT' => $request->nome,
            'status' => $request->status,
            'escola'=>$request->escola,
        ]);

        return Redirect::to('/cadastros/turma');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $NomeEscola = tb_escola::get();
       return view('cadastros.formTurma', ['NomeEscola'=>$NomeEscola]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cadastros = tb_turma::join('tb_escolas', 'tb_turmas.escola', '=', 'tb_escolas.id_escola')->get();
        return view('cadastros.listTurma', ['cadastros' => $cadastros]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editEscola = tb_escola::get(); 
        $edit = tb_turma::join('tb_escolas', 'tb_turmas.escola', '=', 'tb_escolas.id_escola')->findOrFail($id_turma);
        return view('cadastros.formTurma', ['edit' => $edit, 'editEscola'=>$editEscola]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = tb_turma::findOrFail($id_turma);
        $update -> update($request->all());
        return Redirect::to('/cadastros/turma');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = tb_turma::findOrFail($id_turma);
        $delete -> delete();
        return Redirect::to('/cadastros/turma');
    }
}
