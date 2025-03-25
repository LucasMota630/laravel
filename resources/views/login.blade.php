@extends('_partials/body')

@section('conteudo')
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
    @endsection