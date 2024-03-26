<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <h1>Lista de Produtos</h1>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($catalog as $item)
        <tr>
            <td>{{ $item->nome }}</td>
            <td>{{ $item->marca }}</td>
            <td>{{ $item->modelo }}</td>
            <td>
                <a href="{{ url('/catalog/'.$item->id.'/edit') }}">Editar</a>
                <form action="{{ url('/catalog/'.$item->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Excluir</button>
                    <a href="{{ url('/catalog/create') }}">Adicionar Produto</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


</body>
</html>

