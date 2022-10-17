{{$slot}}

<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{$classe}}" value={{ old('nome') }}>
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{$classe}}" value={{ old('telefone') }}>
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{$classe}}" value={{ old('email') }}>
    <br>
    <select name="motivo_contato" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{$key}}" {{ old('motivo_contato') == $key ? 'selected' : ''}} >{{$motivo_contato}}</option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{$classe}}" placeholder="Preencha aqui a sua mensagem">{{ old('mensagem') }}</textarea>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>
