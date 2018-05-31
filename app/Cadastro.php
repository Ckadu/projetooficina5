<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
	protected $fillable = ['nome','email','telefone','nascimento'];
}
