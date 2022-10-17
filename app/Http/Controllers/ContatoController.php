<?php

namespace App\Http\Controllers;

use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        /* dd($request->all());
        echo $request->input('nome');
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        print_r($contato->getAttributes());
        $contato->save(); */
        
        // $contato = new SiteContato();
        // $contato->fill($request->all());
        
        $motivo_contatos = [
            '1' => 'Duvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
        ];
        
        return view('site.contato',['motivo_contatos' => $motivo_contatos]);
    }
    
    public function salvar(Request $request) 
    {
        //Validação de dados com variavel $errors do laravel
        $request->validate([
            'nome' => 'required | min:3 | max:50',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required | max:2000', 
        ]);
        // SiteContato::create($request->all());
    }
}
