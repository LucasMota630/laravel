<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - AdoçãoPets</title>
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
      .login-container {
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        background-color: #154B52;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      }
      .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
      }
      .form-control {
        background-color: #1C8394;
        border: none;
        color: #ffffff;
      }
      .form-control:focus {
        background-color: #1C8394;
        border-color: #1C8394;
        box-shadow: none;
        color: #ffffff;
      }
      .form-control::placeholder {
        color: #cccccc;
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
              <a class="nav-link" href="{{ route('principal') }}">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('registrar') }}">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="login-container">
      <h2>Login</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
        <p class="text-center mt-3">
          <a href="#" style="color: #1C8394;">Esqueceu a senha?</a>
        </p>
        <p class="text-center">
          Não tem uma conta? <a href="#" style="color: #1C8394;">Registre-se</a>
        </p>
      </form>
    </div>

    <footer class="footer">
      <p>&copy; 2023 AdoçãoPets. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>