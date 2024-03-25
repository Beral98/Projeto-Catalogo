<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar produto</title>
</head>
<body>

<h2>Editar Produto</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="post" action="{{ route('product.update', $product) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" required>
        </div> <br>
        <div>
            <label for="price">Marca:</label>
            <input type="text" id="brand" name="brand" value="{{ $product->brand }}" required>
        </div>
        <div> <br>
            <label for="model">Modelo:</label>
            <input type="text" id="model" name="model" value="{{ $product->model }}" required>
        </div> <br>
        <button type="submit">Atualizar</button>
    </form>

</body>
</html>
