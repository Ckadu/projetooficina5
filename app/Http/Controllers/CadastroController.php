<?php

namespace App\Http\Controllers;

use App\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index()
    {
        $cadastros = Cadastro::all();
        return view('cadastros.index',compact('cadastros',$cadastros));

    }

    public function create()
    {
        return view('cadastros.create');
    }
    
    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'nome' => 'required|max:50',
            'email' => 'required|max:50',
            'telefone' => 'required|max:15',
            'nascimento' => 'required',
        ]);
                    
        $cadastro = Cadastro::create(['nome' => $request->nome,'email' => $request->email,'telefone' => $request->telefone,'nascimento' => $request->nascimento]);
        return redirect('/cadastros/'.$cadastro->id);
    }

    public function show(Cadastro $cadastro)
    {
        return view('cadastros.show',compact('cadastro',$cadastro));
    }
    
    public function edit(Cadastro $cadastro)
    {
        return view('cadastros.edit',compact('cadastro',$cadastro));
    }
    
    public function update(Request $request, Cadastro $cadastro)
    {
        //Validate
        $request->validate([
            'nome' => 'required|max:50',
            'email' => 'required|max:50',
            'telefone' => 'required|max:15',
            'nascimento' => 'required',
        ]);
        
        $cadastro->nome = $request->nome;
        $cadastro->email = $request->email;
        $cadastro->telefone = $request->telefone;
        $cadastro->nascimento = $request->nascimento;
        $cadastro->save();
        $request->session()->flash('message', 'Cadastro modificado com sucesso!');
        return redirect('cadastros');
    }
    
    public function destroy(Request $request, Cadastro $cadastro)
    {
        $cadastro->delete();
        $request->session()->flash('message', 'Cadastro deletado com Sucesso!');
        return redirect('cadastros');
    }
}
