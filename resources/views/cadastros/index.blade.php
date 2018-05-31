@extends('layouts.app')

@section('content')
      
      <link href="{{ asset('css/cadastros.css') }}" rel="stylesheet">

        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        
        <div class="col-sm-12" id="tilt">
          <div class="col-sm-9">
            <strong id="titulo">Usuários Cadastradas no Sistema</strong>       
          </div>
          <div class="col-sm-2">
            <a href="/cadastros/create">
              <button id="nc">Novo Cadastro</button>
            </a>
          </div>
          <div class="col-sm-1">
            <a href="/cadastros/create">
              <img src="/img/add.png" id="imgcad">
            </a>
          </div>
        </div>

        <div class="col-sm-12">
          <table class="table">
            <thead class="thead-dark">
              <tr>              
                <th id="th" class="col-sm-3" scope="col">Nome</th>
                <th id="th" class="col-sm-3" scope="col">E-mail</th>
                <th id="th" class="col-sm-2" scope="col">Telefone</th>
                <th id="th" class="col-sm-2" scope="col">Data de Nascimento</th>
                <th id="th" class="col-sm-2" scope="col">Opções</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cadastros as $cadastro)
              <tr>
                <td>{{$cadastro->nome}}</td>
                <td>{{$cadastro->email}}</td>
                <td>{{ $cadastro-> telefone}}</td>
                <?php
                  $ano = substr($cadastro->nascimento, 0, 4);
                  $mes = substr($cadastro->nascimento, 5, 2);
                  $dia = substr($cadastro->nascimento, 8, 2);
                ?>
                <td>{{$dia}}/{{$mes}}/{{$ano}}</td>
                <td>
                  <div class="col-sm-12">                      
                    <a href="{{ URL::to('cadastros/' . $cadastro->id . '/edit') }}">
                      <img id="imgbtn" src="/img/edit.png">
                    </a>
                    <form style="margin-left: 20%; margin-top: -30px;" action="{{ url('cadastros', [$cadastro->id]) }}" method="POST">
                      <input type="hidden" name="_method" value="DELETE">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button style="width: 50px;" type="submit">
                        <img id="imgbtn" src="/img/excluir.png" style="width: 100%">
                      </button>
                    </form>
                  </div>                  
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
@endsection
