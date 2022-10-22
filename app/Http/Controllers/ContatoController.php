<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {   
        $motivo_contatos = MotivoContato::all();
        return view('site.contato',['motivo_contatos' => $motivo_contatos]);
    }
    
    public function salvar(Request $request) 
    {
        //Validação de dados com variavel $errors do laravel
        $request->validate(
            [
                'nome' => 'required | min:3 | max:50',
                'telefone' => 'required',
                'email' => 'email',
                'motivo_contatos_id' => 'required',
                'mensagem' => 'required | max:2000', 
            ],
            [
                'nome.min' => 'O campo nome deve ter no minímo 3 caracteres',
                'nome.max' => 'O campo nome deve ter no maximo 50 caracteres',
                'email.email' => 'O email informado inválido',
                'mensagem.max' => 'A mensagem deve conter no máximo 2000 caracteres',
                'required' => 'O campo :attribute deve ser preenchido'
            ]
        );
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
