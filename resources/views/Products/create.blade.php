 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Produto</title>
 </head>
 <body>
 <h1>Criar Novo Produto</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Nome do Produto</label>
        <input type="text" name="name" id="name" required><br>

        <label for="price">Preço:</label>
        <input type="text" name="price" id="price" required><br>
        

        <button type="submit">Criar Produto</button>

        <a href="{{ route('products.index') }}">Ver lista de produtos</a>
    </form>
 </body>
 </html>   