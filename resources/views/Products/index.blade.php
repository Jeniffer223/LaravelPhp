<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
<h1>Lista de Produtos</h1>
    <a href="{{ route('products.create') }}">Adicionar Novo Produto</a>
    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }} - R$ {{ number_format($product->price, 2, ',', '.') }}</li>
            <a href="{{ route('products.edit', $product->id) }}">Editar</a>
        @endforeach
    </ul>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>


</body>
</html>