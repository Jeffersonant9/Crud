<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    
    <form action="/create" method="POST" enctype="multipart/form-data">
        @csrf

        <h3>Criar Produto</h3>

        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>

        <label for="price">Preço:</label>
        <input type="number" name="price" id="price" required step="0.01">

        <label for="img">Imagem:</label>
        <input type="file" name="img" id="img">

        <input type="submit" value="Enviar">
    </form>

    <hr>

    <h3>Lista de Produtos</h3>

    @foreach($products as $product)
        <form action="/delete" method="POST" style="margin-bottom: 10px;">
            @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">
            
            <p name="name" >Nome: {{ $product->name }}</p>
            <p name="price" value="{{ $product->price }}">Preço: {{ $product->price }}</p>
            <p name="img" value="{{ $product->img }}">Imagem: {{ $product->img }}</p>

            <input type="submit" value="Deletar">
        </form>
    @endforeach

</body>
</html>
