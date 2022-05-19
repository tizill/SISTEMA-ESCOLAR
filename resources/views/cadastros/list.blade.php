@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('cadastros/novo')}}">Cadastrar Nova Escola</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Lista de Cadastros</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">UF</th>
                            <th scope="col">CNPJ</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach ($cadastros as $c)
                          <tr>
                            <th scope="row">{{$c->id_escola}}</th>
                            <td>{{$c->nomeE}}</td>
                            <td>{{$c->uf}}</td>
                            <td>{{$c->cnpj}}</td>
                            <td>
                                <a href="cadastros/{{$c->id_escola}}/edit" class="btn btn-info">Editar</a>
                            </td>
                            <td>
                                <form action="cadastros/delete/{{$c->id_escola}}" method="post">
                                    @csrf
                                    @method('delete')
                                <button class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
                          </tr>
                        
                    @endforeach
                         </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
