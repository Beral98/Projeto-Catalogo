<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vitrine Store</title>
    <style>

.edit-link {
            display: inline-block;
            padding: 5px 10px;
            background-color: #f2f2f2; /* Cor de fundo da caixa */
            border: 1px solid #ccc; /* Borda da caixa */
            border-radius: 5px; /* Borda arredondada */
            text-decoration: none; /* Remover sublinhado do link */
            color: #333; /* Cor do texto */
        }
        th:nth-child(1),
        td:nth-child(1) {
            width: 30%; /* Largura da primeira coluna */
        }

        th:nth-child(2),
        td:nth-child(2) {
            width: 20%; /* Largura da segunda coluna */
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 30%; /* Largura da terceira coluna */
        }

        th:nth-child(4),
        td:nth-child(4) {
            width: 20%; /* Largura da quarta coluna */
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #FFE5B4;
        }
        /* Estilos para os botões */
        td a,
        td button {
            display: inline-block;
            margin-right: 50px; /* Espaçamento entre os botões */
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
                <a href="{{ url('/catalog/'.$item->id.'/edit') }}" type="submit">Editar</button>
                <form action="{{ url('/catalog/'.$item->id) }}" method="post">
                    <br>
                    @csrf
                    @method('delete')
                    <button type="submit">Excluir</button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a type="submit" href="{{ url('/catalog/create') }}">Adicionar Produto</a>

</body>
</html>

