<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar produtos</title>
</head>
<body>
<h1>Produto: {{ $id }}</h1>
    <a href="{{ route('products.edit', $id) }}">Editar Produto</a>
    <form action="{{ route('products.destroy', $id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar Produto</button>
    </form>
    <a href="{{ route('products.index') }}">Voltar à lista de produtos</a>
</body>
</html>