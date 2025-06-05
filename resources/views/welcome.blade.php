<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="/create" method="post">
        <label for="">criar produtos</label>
        <input for="">nome</input>
        <input type="text" value="name">
        <label for="">preço</label>
        <input type="number" value="price">
        <label for="">imagem</label>
        <input type="file" value="img">
        <input type="submit">
    </form>


    @foreach($Products as Products)

        <form action="/delete" method="post">
     
            <input value="$Produts" type="submit">
        </form>
         
        <form action="/create" method="post">
            <input value="{{$Produts->}}">
            <label for="">criar produtos</label>
            <input for="">nome</input>
            <input type="text" value="name">
            <label for="">preço</label>
            <input type="number" value="price">
            <label for="">imagem</label>
            <input type="file" value="img">
            <input type="submit">
        </form>

        

    @endforeach

    
</body>
</html>