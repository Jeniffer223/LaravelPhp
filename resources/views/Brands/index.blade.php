<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Marcas</title>
</head>
<body>
    <h1>Lista de Marcas</h1>
    
    <a href="{{ route('brands.create') }}">Adicionar Nova Marca</a><br><br>
    
        <tbody>
            @foreach($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->name }}</td><br>
                <td><br>
                    <a href="{{ route('brands.edit', $brand->id) }}">Editar</a><br>
                    <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir esta marca?');">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
</body>
</html>
