@extends('layouts.app')
 
<link href="{{ asset('css/cadastros.css') }}" rel="stylesheet">

@section('content')
<div class="col-sm-12">

	<div class="col-sm-12" id="voltar">
		<a href="/cadastros">
			<img id="back" src="/img/voltar.png">
			<button id="voltar">VOLTAR</button>
		</a>
	</div>

    <div id="titulo" class="col-sm-12">
    	<strong id="titulo">Informações do Usuário  {{ $cadastro->nome }}</strong> 
    </div>
 
 	<div class="col-sm-12"> 		
	    <div id="info" class="text-center col-sm-12">	    	
	    	<div class="col-sm-12" id="info">
	    		<div class="col-sm-3 col-sm-offset-4">		
	    			<strong>Nome: </strong>
	    		</div>
	    		<div class="col-sm-2">
	    			<label>{{ $cadastro->nome }}</label>
	    		</div>
	    	</div>
	    	<div class="col-sm-12" id="info">
		    	<div class="col-sm-3 col-sm-offset-4">
		    		<strong>E-mail: </strong>
		    	</div>
		    	<div class="col-sm-2">
		    		<label>{{ $cadastro->email }}</label>
		    	</div>
	    	</div>
	    	<div class="col-sm-12" id="info">
	    		<div class="col-sm-3 col-sm-offset-4">
	    			<strong>Telefone: </strong>	    		
	    		</div>
	    		<div class="col-sm-2">
	    			<label>{{ $cadastro->telefone}}</label>	    			
	    		</div>
	    	</div>
	    	<div class="col-sm-12">
	    		<div class="col-sm-3 col-sm-offset-4">
	    			<strong>Data de Nascimento: </strong>	    		
		    	</div>
		    	<div class="col-sm-2">
		    		<?php
	                  $ano = substr($cadastro->nascimento, 0, 4);
	                  $mes = substr($cadastro->nascimento, 5, 2);
	                  $dia = substr($cadastro->nascimento, 8, 2);
	                ?>
	    			<label>{{$dia}}/{{$mes}}/{{$ano}}</label>
	    		</div>
	    	</div>
	    </div>
 	</div>
</div>
@endsection