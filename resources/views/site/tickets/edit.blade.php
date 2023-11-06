<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('support.index') }}">Jamerson<br>Support</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{ route('support.index') }}">Registros</a>
                </div>
            </div>
            </div>
        </nav>
    </div>    

    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <form method="POST" action="{{ route('support.update', $support->id) }}">
            @csrf
            @method('PUT')
            <h3>Contato</h3>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input name="nome" class="form-control" value="{{ $support->nome }}" id="exampleFormControlInput1" placeholder="Nome Completo">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input name="email" class="form-control" value="{{ $support->email }}" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                <input name="telefone" class="form-control" value="{{ $support->telefone }}" id="exampleFormControlInput1" placeholder="(00) 0 0000-0000">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Dúvida</label>
                <input name="duvida"  class="form-control" id="exampleFormControlTextarea1" value="{{ $support->duvida }}"  placeholder="Sua dúvida">
            </div>
            <input class="btn btn-primary" type="submit" value="Atualizar">
        </form>
   
    </div>



</body>