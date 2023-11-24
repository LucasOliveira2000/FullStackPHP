<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body>
   <div>
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
                <a class="nav-link active" href="{{route('login.index')}}">Login</a>
                <a class="nav-link active" href="{{route('login.destroy')}}">Logout</a>
               </div>
            </div>
         </div>
      </nav>
   </div>

   
   <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.positivoservers.com.br/wp-content/uploads/2017/05/checklist-de-manutencao-preventiva-de-computadores-1200x565.jpg" style="width: 90vw; height:60vh; display:flex; margin: 20px auto;"> 
        </div>
        <div class="carousel-item active">
         <img src="https://www.positivoservers.com.br/wp-content/uploads/2017/05/checklist-de-manutencao-preventiva-de-computadores-1200x565.jpg" style="width: 90vw; height:60vh; display:flex; margin: 20px auto;"> 
       </div>
       <div class="carousel-item active">
         <img src="https://www.positivoservers.com.br/wp-content/uploads/2017/05/checklist-de-manutencao-preventiva-de-computadores-1200x565.jpg" style="width: 90vw; height:60vh; display:flex; margin: 20px auto;"> 
       </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>




    
   
</body>