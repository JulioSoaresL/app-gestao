@extends('app.layouts.basico')
@section('titulo', 'Fornecedor')
@section('conteudo')

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina2">
            <p>Fornecedor - Listar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width:90%; margin: auto;">
                <table border="1px" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <td>{{ $fornecedor->nome }}</td>
                                <td>{{ $fornecedor->site }}</td>
                                <td>{{ $fornecedor->uf }}</td>
                                <td>{{ $fornecedor->email }}</td>
                                <td><a href='{{ route('app.fornecedor.excluir', $fornecedor->id) }}'>Excluir</a></td>
                                <td><a href='{{ route('app.fornecedor.editar', $fornecedor->id) }}'>Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $fornecedores->appends($request)->links('pagination::bootstrap-4') }}
                Exibindo {{ $fornecedores->count() }} de {{ $fornecedores->total() }} (de {{ $fornecedores->firstItem() }} a {{ $fornecedores->lastItem() }})

            </div>
        </div>
    </div>
    
@endsection