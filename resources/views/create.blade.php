<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar produto</title>
</head>
<body>

<h2>Cadastrar produto</h2>

<form method="get" action="{{ route('create') }}" class="container"  enctype="multipart/form-data">

    @csrf
    <label for="nome">Nome:</label><br> <input type="text" id="nome" name="nome"><br><br>
    <label for="marca">Marca:</label><br> <input type="text" id="marca" name="marca"><br><br>
    <label for="modelo">Modelo:</label><br> <input type="text" id="modelo" name="modelo"><br><br>
    <button type="submit">Cadastrar</button>

</form>

</body>
</html>
