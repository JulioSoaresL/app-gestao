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
            <div style="width:30%; margin: auto;">
                <form method="post"action="">
                    @csrf
                    <input type="text" name="nome" placeholder="nome" class="borda-preta">
                    <input type="text" name="site" placeholder="site" class="borda-preta">
                    <input type="text" name="uf" placeholder="uf" class="borda-preta">
                    <input type="text" name="email" placeholder="email" class="borda-preta">

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection