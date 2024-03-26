<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <h1>Editar Produto</h1>

<form action="{{ url('/catalog/'.$item->id) }}" method="post">
    @csrf
    @method('put')
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="{{ $item->nome }}">

    <label for="marca">Marca:</label>
    <input type="text" name="marca" id="marca" value="{{ $item->marca }}">

    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" id="modelo" value="{{ $item->modelo }}">

    <button type="submit">Salvar</button>
</form>
</body>
</html>
