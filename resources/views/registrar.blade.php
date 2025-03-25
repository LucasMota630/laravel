@extends('_partials/body')

@section('conteudo')
    <div class="register-container">
      <h2>Registro</h2>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="name" placeholder="Digite seu nome completo">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control" id="confirm-password" placeholder="Confirme sua senha">
        </div>
        <button type="submit" class="btn btn-primary w-100">Registrar</button>
        <p class="text-center mt-3">
          Já tem uma conta? <a href="#" style="color: #1C8394;">Faça login</a>
        </p>
      </form>
    </div>
@endsection