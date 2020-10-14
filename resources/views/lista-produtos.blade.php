<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Produtos</title>
    <!-- CSS -->
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">

                <thead>
                <tr>
                    <th data-campo="ID" onclick="setOrderBy(this)">ID</th>
                    <th>Nome</th>
                    <th>Opções</th>
                </tr>
                </thead>

                <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <td>
                        {{ $produto->id }}
                    </td>
                    <td>
                        {{ $produto->name }}
                    </td>
                    <td>
                        <a href="/produtos/delete/{{ $produto->id }}">
                            Deletar
                        </a>
                        <a href="/produtos/editar/{{ $produto->id }}">
                            Editar
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <div>
        <h5>criar produto</h5>
        <div>
            <form action="/produtos/criar" method="post">
                @csrf

                Nome
                <input name="name" value="">

                <button type="submit">Criar</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>
