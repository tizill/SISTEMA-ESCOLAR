@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ola, tudo bem com você ? :)') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Seja Bem-Vindo</h1>
                    <a href="{{ url('cadastros') }}">Lista de escolas Cadastradas</a> <br>
                    <a href="{{ url('cadastros/turma') }}">Listas de turmas</a> <br>
                    <a href="{{ url('cadastros/professor') }}">Listas de professores</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
