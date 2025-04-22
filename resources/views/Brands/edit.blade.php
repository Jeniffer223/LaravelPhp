<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar Marca</h1>
        <form action="{{ route('brands.update', $brand->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
        <label>Nome da Marca:</label>
        <input type="text" name="name" required>
        </div>
    <button type="submit">Atualizar</button>
    <a href="{{ route('brands.index') }}">Cancelar</a>
</form>
</body>
</html>