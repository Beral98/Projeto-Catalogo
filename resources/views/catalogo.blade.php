<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Produtos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Produtos</h1>
    <br>
        <form method="get" action="{{route('create')}}">
        <button type="submit">Cadastrar Produto</button>
        </form>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Modelo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->marca }}</td>
                <td>{{ $produto->modelo }} </td>
                <td>
                    <form method="get" action="{{ route('product.edit', $produto->id) }}">
                        <button type="submit">Editar</button>
                    </form>
                    <form method="post" action="{{ route('product.delete', $produto->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

