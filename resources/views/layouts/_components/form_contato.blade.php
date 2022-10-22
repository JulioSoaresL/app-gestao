{{$slot}}

<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{$classe}}" value={{ old('nome') }}>
    @if($errors->has('nome'))
        {{ $errors->first('nome') }}
    @endif
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{$classe}}" value={{ old('telefone') }}>
    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{$classe}}" value={{ old('email') }}>
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    <br>
    <select name="motivo_contatos_id" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : ''}} >{{$motivo_contato->motivo_contato}}</option>
        @endforeach
    </select>
    {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : '' }}
    <br>
    <textarea name="mensagem" class="{{$classe}}" placeholder="Preencha aqui a sua mensagem">{{ old('mensagem') }}</textarea>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>

    {{-- @if($errors->any())
        @foreach ($errors->all() as $erro)
            {{ $erro }}</br>
        @endforeach
    @endif --}}
</form>
