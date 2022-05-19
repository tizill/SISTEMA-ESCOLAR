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
                    @if(Request::is('*/edit/professor'))
                    <form action="{{ url('cadastros/update/professor')}}/{{$edit->id_professor}}" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nome</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="nomeP" aria-describedby="emailHelp" value="{{$edit->nomeP}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">CPF</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="cpf" aria-describedby="emailHelp" value="{{$edit->cpf}}" min='11' required>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">TURMA:</label>
                            <select class="form-select" name="turma" id="inputGroupSelect01" required>
                                @foreach($editTurma as $ed)
                                <option value="{{$ed->id_turma}}">{{$ed->nomeT}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>

                    @else
                    <form action="{{ url('cadastros/add/professor')}}" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nome</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="nome" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">CPF</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="cpf" aria-describedby="emailHelp" min='11' required>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">TURMA:</label>
                            <select class="form-select" name="turma" id="inputGroupSelect01" required>
                                @foreach($NomeTurma as $nt)
                                <option value="{{$nt->id_turma}}">{{$nt->nomeT}}</option>
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
