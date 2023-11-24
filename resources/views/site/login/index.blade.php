<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <form action="{{ route('login.index') }}" method="post" >
            @csrf
            <h3>Login</h3>
            <br>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input name="email" class="form-control" id="exampleFormControlInput1" placeholder="email@exemple.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Senha</label>
                <input name="password" class="form-control" id="exampleFormControlInput1" placeholder="TypeYourPassword">
            </div>
            <input href="{{ route('login.store') }}" class="btn btn-primary" type="submit" value="Submit">
            <a href="{{ route('users.create') }}" class="btn btn-link">Register</a>
        </form>
        
    </div>    
</body>
</html>