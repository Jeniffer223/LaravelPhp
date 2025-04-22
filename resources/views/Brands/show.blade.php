<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar marcas</title>
</head>
<body>
<h1>Marcas: {{ $brand->name }}</h1>
    <a href="{{ route('brands.edit', $id) }}">Editar Produto</a>
    <form action="{{ route('brands.destroy', $id) }}" method="POST">
        @csrf
    </form>
    <a href="{{ route('brands.index') }}">Voltar</a>
</body>
</html>