@extends('layouts.app')
 
@section('content')

    <link href="{{ asset('css/cadastros.css') }}" rel="stylesheet">
  
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <h1>Editar Dados</h1>
    <hr>
    <form action="{{url('cadastros', [$cadastro->id])}}" method="POST">
       <input type="hidden" name="_method" value="PUT">
       {{ csrf_field() }}
        <div class="form-group">
          <div class="col-sm-3">
            <label for="nome">Nome</label>
            <input type="text" value="{{$cadastro->nome}}" class="form-control" id="nome"  name="nome">            
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-3">
            <label for="email">E-mail</label>
            <input type="text" value="{{$cadastro->email}}" class="form-control" id="email" name="email">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3">
            <label for="telefone">Telefone</label>
            <input type="text" value="{{ $cadastro->telefone }}" class="form-control" maxlength="15" id="telefone" name="telefone" >
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3">
            <label for="nascimento">Data de Nascimento</label>
            <input type="date" value="{{$cadastro->nascimento}}" class="form-control" id="nascimento" name="nascimento" >
          </div>
        </div>
        <div class="form-group col-sm-12" id="button" style="text-align: center; margin-top: 2%">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" name="btn" id="button" class="btn btn-primary" value="ATUALIZAR">
        </div>
    </form>

@endsection