<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar produto</title>
</head>
<body>

<h2>Cadastrar produto</h2>

<form method="post" action="catalogo" class="container"  enctype="multipart/form-data">
@csrf
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
        </div> <br>
        <div>
            <label for="brand">Marca:</label>
            <input type="text" id="brand" name="brand" required>
        </div>
        <div> <br>
            <label for="model">Modelo:</label>
            <input type="text" id="model" name="model" required>
        </div> <br>
        <button type="submit">Cadastrar</button>

    </form>
</form>

</body>
</html>
