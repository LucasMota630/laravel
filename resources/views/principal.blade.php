<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adoção de Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #000B0D;
        color: #ffffff;
      }
      .navbar {
        background-color: #154B52 !important;
      }
      .navbar-brand, .nav-link {
        color: #ffffff !important;
      }
      .nav-link:hover {
        color: #1C8394 !important;
      }
      .btn-primary {
        background-color: #1C8394;
        border-color: #1C8394;
      }
      .btn-primary:hover {
        background-color: #154B52;
        border-color: #154B52;
      }
      .card {
        background-color: #154B52;
        color: #ffffff;
        margin: 10px;
      }
      .card img {
        max-height: 200px;
        object-fit: cover;
      }
      .footer {
        background-color: #154B52;
        color: #ffffff;
        padding: 20px 0;
        text-align: center;
        margin-top: 30px;
        position: fixed;
        bottom: 0;
        width: 100%;
      }
    </style>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">AdoçãoPets</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('principal') }}">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('registrar') }}">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <h1 class="text-center">Encontre seu novo amigo!</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_vc6QTvSPasuk51l7tyLZCpoYADJ9wW-3vA&s" class="card-img-top" alt="Cachorro 1">
            <div class="card-body">
              <h5 class="card-title">Rex</h5>
              <p class="card-text">Rex é um cachorro muito brincalhão e adora crianças.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTxy_UBy5ZeLLs7iU4_B2oCb4BELrw1d4SIg&s" class="card-img-top" alt="Gato 1">
            <div class="card-body">
              <h5 class="card-title">Mimi</h5>
              <p class="card-text">Mimi é uma gatinha carinhosa e tranquila.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7kld85h-aFiF-ckliUO37zYozeVvaQnnfGw&s" class="card-img-top" alt="Cachorro 2">
            <div class="card-body">
              <h5 class="card-title">Bela</h5>
              <p class="card-text">Bela é uma cachorrinha muito dócil e amorosa.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <p>&copy; 2023 AdoçãoPets. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>