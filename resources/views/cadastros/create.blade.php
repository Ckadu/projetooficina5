@extends('layouts.app')
 
@section('content')

<link href="{{ asset('css/cadastros.css') }}" rel="stylesheet">

<div class="col-sm-12">
    <div class="col-sm-12" id="voltar">
      <a href="/cadastros">
        <img id="back" src="/img/voltar.png">
        <button id="voltar">VOLTAR</button>
      </a>
    </div>

    <div class="full-width col-sm-12" id="titulo">
      <strong id="titulo">NOVO CADASTRO</strong>
    </div>

     <form action="/cadastros" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <div class="col-sm-3">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome"  name="nome" placeholder="Nome Completo">  
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3">
          <label for="email">E-mail</label>
          <input type="text" class="form-control" placeholder="Ex.: exemplo@gmail.com" id="email" name="email">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3">
          <label for="telefone">Telefone</label>
          <input type="text" class="form-control phone-ddd-mask" maxlength="15" placeholder="Ex.: (00) 0000-0000" id="telefone" name="telefone">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3">
          <label for="nascimento">Data de Nascimento</label>
          <input type="date" class="form-control date-mask" placeholder="Ex.: dd/mm/aaaa" data-mask="00/00/0000" maxlength="10" id="nascimento" name="nascimento">
        </div>
      </div>

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <div class="col-sm-12" id="botao" style="text-align: center; margin-top: 2%">
        <button type="submit" class="btn btn-primary">CADASTRAR</button>  
      </div>

    </form>
</div>
@endsection