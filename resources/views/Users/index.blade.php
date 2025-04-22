<!DOCTYPE pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
<h1>Lista de Usuários</h1>
    <a href="{{ route('users.create') }}">Criar novo usuário</a>
    <ul>
        @foreach ($users as $user)
        <li>{{ $user->name }} - {{ $user->email }}</li>
        <a href="{{ route('users.edit', $user->id) }}">Editar</a>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;"><br>
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
        @endforeach
    </ul>
</body>
</html>