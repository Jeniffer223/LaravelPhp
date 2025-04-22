<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<h1>Editar Usuário</h1>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{ $user->name }}" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ $user->email }}" required>

    <label for="password">Senha </label>
    <input type="password" name="password" id="password">


    <button type="submit">Atualizar Usuário</button>
</form>

<a href="{{ route('users.index') }}">Voltar</a>
</body>
</html>