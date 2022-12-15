@if($mensagem = Session::get('erro'))
    {{ $mensagem }}
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
    {{ $error }} <br />
    @endforeach
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    Nome: <input type="text" name="firstName"> <br />
    Sobrenome: <input type="text" name="lastName"> <br />
    E-mail: <input type="email" name="email"> <br />
    Senha: <input type="password" name="password"> <br />
    <button type="submit">Cadastrar</button>

</form>



