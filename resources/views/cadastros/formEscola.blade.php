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
                    @if(Request::is('*/edit'))
                    <form action="{{ url('cadastros/update')}}/{{$edit->id_escola}}" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nome</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="nomeE" aria-describedby="emailHelp" value="{{$edit->nomeE}}" required>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">UF:</label>
                            <select class="form-select" name="uf" id="inputGroupSelect01" value="{{$edit->uf}}" required>
                              <option value="MARANHAO">MA</option>
                              <option value="PAUI">PI</option>
                              <option value="TOCANTINS">TO</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">CNPJ</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="cnpj" aria-describedby="emailHelp" value="{{$edit->cnpj}}" required>
                            <div id="emailHelp" class="form-text">Nunca compartilharemos seu CNPJ com mais ninguém</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>

                    @else
                    <form action="{{ url('cadastros/add')}}" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nome</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="nome" aria-describedby="emailHelp" required>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">UF:</label>
                            <select class="form-select" name="uf" id="inputGroupSelect01" required>
                              <option value="MARANHAO">MA</option>
                              <option value="PAUI">PI</option>
                              <option value="TOCANTINS">TO</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">CNPJ</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="cnpj" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text">Nunca compartilharemos seu CNPJ com mais ninguém</div>
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
