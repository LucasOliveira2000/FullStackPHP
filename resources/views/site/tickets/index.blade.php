<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body >
    <h1 style="text-align: center">Registros do Suporte</h1>
    <ul class="list-group">
        @foreach ($supports as $support)
            <li class="list-group-item">
                Nome: {{ $support->nome }} <br>
                Email: {{ $support->email }}<br>
                Telefone: {{ $support->telefone }}<br>
                Dúvida: {{ $support->duvida }}<br>
            </li>
            <br>
        @endforeach
    </ul>

</body>
</html>