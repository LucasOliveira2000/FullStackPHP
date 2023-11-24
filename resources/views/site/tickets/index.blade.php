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
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home.index') }}">Jamerson<br>Support</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{ route('support.index') }}">Registros</a>
              <a class="nav-link active" href="{{ route('support.store') }}">Contato</a>
              <a class="nav-link active" href="{{route('login.destroy')}}">Logout</a>
            </div>
          </div>
        </div>
      </nav>
    <h1 style="text-align: center">Registros do Suporte</h1>
    <ul class="list-group">
        @foreach ($supports as $support)
            <li class="list-group-item">
                ID: {{ $support->id}} <br>
                Nome: {{ $support->nome }} <br>
                Email: {{ $support->email }}<br>
                Telefone: {{ $support->telefone }}<br>
                Dúvida: {{ $support->duvida }}<br>
                
                <form method="GETphp" action="{{ route('support.edit', $support->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary" >Edit</button>
                </form>
                
                <!-- Formulário para excluir o registro -->
                <form method="POST" action="{{ route('support.destroy', $support->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </li>
            <br>
        @endforeach
    </ul>

</body>
</html>