@extends('app.layouts.basico')
@section('titulo', 'Fornecedor')
@section('conteudo')

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>Fornecedor - Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            {{ $msg ?? '' }}
            <div style="width:30%; margin: auto;">
                <form method="post"action="{{ route('app.fornecedor.adicionar') }}">
                    @csrf
                    <input type="hidden" name="id" value={{ $fornecedor->id  ?? ''}}>
                    <input type="text" name="nome" placeholder="nome" class="borda-preta" value={{ $fornecedor->nome ?? old('nome') }}>
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                    <input type="text" name="site" placeholder="site" class="borda-preta" value={{ $fornecedor->site ?? old('site') }}>
                    {{ $errors->has('site') ? $errors->first('site') : '' }}
                    <input type="text" name="uf" placeholder="uf" class="borda-preta" value={{ $fornecedor->uf ?? old('uf') }}>
                    {{ $errors->has('uf') ? $errors->first('uf') : '' }}
                    <input type="text" name="email" placeholder="email" class="borda-preta" value={{ $fornecedor->email ?? old('email') }}>
                    {{ $errors->has('email') ? $errors->first('email') : '' }}

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection