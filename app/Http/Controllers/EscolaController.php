<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_escola;
use Redirect;

class EscolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastros = tb_escola::get();
        return view('cadastros.list', ['cadastros' => $cadastros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        tb_escola:: create([
            'nomeE' => $request->nome,
            'uf' => $request->uf,
            'cnpj'=>$request->cnpj,
        ]);

        return Redirect::to('/cadastros');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('cadastros.formEscola');
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
    public function edit($id)
    {
        $edit = tb_escola::findOrFail($id);
        return view('cadastros.formEscola', ['edit' => $edit]);
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
        $update = tb_escola::findOrFail($id);
        $update -> update($request->all());
        return Redirect::to('/cadastros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = tb_escola::findOrFail($id);
        $delete -> delete();
        return Redirect::to('/cadastros');
    }
}
