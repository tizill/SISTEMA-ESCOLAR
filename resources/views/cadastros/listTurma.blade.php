@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('cadastros/novo/turma')}}">Cadastrar Nova Turma</a></div>

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
                            <th scope="col">status</th>
                            <th scope="col">escola</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach ($cadastros as $c)
                          <tr>
                            <th scope="row">{{$c->id_turma}}</th>
                            <td>{{$c->nomeT}}</td>
                            <td>{{$c->status}}</td>
                            <td>{{$c->nomeE}}</td>
                            <td>
                                <a href="/cadastros/{{$c->id_turma}}/edit/turma" class="btn btn-info">Editar</a>
                            </td>
                            <td>
                                <form action="/cadastros/delete/turma/{{$c->id_turma}}" method="post">
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
