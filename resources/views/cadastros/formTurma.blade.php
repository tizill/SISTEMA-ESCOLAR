@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tudo certo por aqui ? :)') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Request::is('*/edit/turma'))
                    <form action="{{ url('cadastros/update/turma')}}/{{$edit->id_turma}}" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nome</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="nomeT" aria-describedby="emailHelp" value="{{$edit->nomeT}}" required>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">STATUS:</label>
                            <select class="form-select" name="status" id="inputGroupSelect01" required>
                              <option value="ativo">ATIVA</option>
                              <option value="inativo">INATIVA</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">ESCOLA:</label>
                            <select class="form-select" name="escola" id="inputGroupSelect01" required>
                                @foreach($editEscola as $ed)
                                <option value="{{$ed->id_escola}}">{{$ed->nomeE}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>

                    @else
                    <form action="{{ url('cadastros/add/turma')}}" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nome da Turma</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="nome" aria-describedby="emailHelp" required>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">STATUS:</label>
                            <select class="form-select" name="status" id="inputGroupSelect01" required>
                              <option value="ativo">ATIVA</option>
                              <option value="inativo">INATIVA</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">ESCOLA:</label>
                            <select class="form-select" name="escola" id="inputGroupSelect01" required>
                                @foreach($NomeEscola as $ne)
                                <option value="{{$ne->id_escola}}">{{$ne->nomeE}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                      </form>
                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
