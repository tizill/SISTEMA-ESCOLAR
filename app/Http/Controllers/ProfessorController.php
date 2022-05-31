<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_professor;
use App\Models\tb_turma;
use Redirect;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastros = tb_professor::join('tb_turmas', 'tb_professors.turma', '=', 'tb_turmas.id_turma')->get();
        return view('cadastros.listProfessor', ['cadastros' => $cadastros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        tb_professor:: create([
            'nomeP' => $request->nome,
            'cpf' => $request->cpf,
            'turma'=>$request->turma,
        ]);

        return Redirect::to('/cadastros/professor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $NomeTurma = tb_turma::get();
        return view('cadastros.formProfessor', ['NomeTurma'=>$NomeTurma]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_professor)
    {
        $editTurma = tb_turma::get(); 
        $edit = tb_professor::findOrFail($id_professor);
        return view('cadastros.formProfessor', ['edit' => $edit, 'editTurma'=>$editTurma]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_professor)
    {
        $update = tb_professor::findOrFail($id_professor);
        $update -> update($request->all());
        return Redirect::to('/cadastros/professor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_professor)
    {
        $delete = tb_professor::findOrFail($id_professor);
        $delete -> delete();
        return Redirect::to('/cadastros/professor');
    }
}
