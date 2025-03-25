@extends('_partials/body')

@section('conteudo')
    <div class="container mt-5 mb-5">
      <h1 class="text-center mb-4">Encontre seu novo amigo!</h1>
      <p class="text-center lead mb-5">Centenas de animais estão esperando por um lar cheio de amor. Adote e transforme uma vida!</p>
      
      <!-- Filtros -->
      <div class="row mb-4">
        <div class="col-md-12">
          <div class="card p-3">
            <div class="row">
              <div class="col-md-3">
                <select class="form-select">
                  <option selected>Tipo de Animal</option>
                  <option>Cachorro</option>
                  <option>Gato</option>
                  <option>Outros</option>
                </select>
              </div>
              <div class="col-md-3">
                <select class="form-select">
                  <option selected>Porte</option>
                  <option>Pequeno</option>
                  <option>Médio</option>
                  <option>Grande</option>
                </select>
              </div>
              <div class="col-md-3">
                <select class="form-select">
                  <option selected>Idade</option>
                  <option>Filhote</option>
                  <option>Adulto</option>
                  <option>Idoso</option>
                </select>
              </div>
              <div class="col-md-3">
                <button class="btn btn-primary w-100">Filtrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Lista de Animais -->
      <div class="row">
        <!-- Animal 1 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_vc6QTvSPasuk51l7tyLZCpoYADJ9wW-3vA&s" class="card-img-top" alt="Cachorro Rex">
            <div class="card-body d-flex flex-column">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="card-title mb-0">Rex</h5>
                <span class="badge bg-info">Cachorro</span>
              </div>
              <div class="mb-2">
                <span class="badge bg-secondary me-1">Médio porte</span>
                <span class="badge bg-secondary">2 anos</span>
              </div>
              <p class="card-text flex-grow-1">Rex é um cachorro muito brincalhão, cheio de energia e adora crianças. Está castrado, vacinado e microchipado.</p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary w-100">Quero adotar</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Animal 2 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTxy_UBy5ZeLLs7iU4_B2oCb4BELrw1d4SIg&s" class="card-img-top" alt="Gato Mimi">
            <div class="card-body d-flex flex-column">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="card-title mb-0">Mimi</h5>
                <span class="badge bg-warning text-dark">Gato</span>
              </div>
              <div class="mb-2">
                <span class="badge bg-secondary me-1">Pequeno porte</span>
                <span class="badge bg-secondary">1 ano</span>
              </div>
              <p class="card-text flex-grow-1">Mimi é uma gatinha carinhosa, tranquila e muito companheira. Adora um colo e está com todas as vacinas em dia.</p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary w-100">Quero adotar</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Animal 3 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7kld85h-aFiF-ckliUO37zYozeVvaQnnfGw&s" class="card-img-top" alt="Cachorro Bela">
            <div class="card-body d-flex flex-column">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="card-title mb-0">Bela</h5>
                <span class="badge bg-info">Cachorro</span>
              </div>
              <div class="mb-2">
                <span class="badge bg-secondary me-1">Pequeno porte</span>
                <span class="badge bg-secondary">5 anos</span>
              </div>
              <p class="card-text flex-grow-1">Bela é uma cachorrinha dócil, amorosa e muito obediente. Ideal para apartamento e está pronta para te fazer feliz!</p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary w-100">Quero adotar</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Animal 4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="https://www.agrosete.com.br/wp-content/uploads/2022/03/Coelho-de-estimacao1.jpg" class="card-img-top" alt="Coelho Floquinho">
            <div class="card-body d-flex flex-column">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="card-title mb-0">Floquinho</h5>
                <span class="badge bg-success">Coelho</span>
              </div>
              <div class="mb-2">
                <span class="badge bg-secondary me-1">Pequeno porte</span>
                <span class="badge bg-secondary">6 meses</span>
              </div>
              <p class="card-text flex-grow-1">Floquinho é um coelhinho branco muito tranquilo e carinhoso. Adora cenouras e precisa de um lar responsável.</p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary w-100">Quero adotar</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Animal 5 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="https://www.petlife.com.br/blog/assets/post/racas-de-cachorro-grande-conheca-as-17-mais-famosas-64bee56fda771954dd13c342/Cane_Corso.jpg" class="card-img-top" alt="Cachorro Thor">
            <div class="card-body d-flex flex-column">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="card-title mb-0">Thor</h5>
                <span class="badge bg-info">Cachorro</span>
              </div>
              <div class="mb-2">
                <span class="badge bg-secondary me-1">Grande porte</span>
                <span class="badge bg-secondary">3 anos</span>
              </div>
              <p class="card-text flex-grow-1">Thor é um cachorrão cheio de amor para dar. Protetor e muito leal, perfeito para quem busca um grande companheiro.</p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary w-100">Quero adotar</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Animal 6 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="https://images.pexels.com/photos/177809/pexels-photo-177809.jpeg?cs=srgb&dl=pexels-ingewallu-177809.jpg&fm=jpg" class="card-img-top" alt="Gato Luke">
            <div class="card-body d-flex flex-column">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="card-title mb-0">Luke</h5>
                <span class="badge bg-warning text-dark">Gato</span>
              </div>
              <div class="mb-2">
                <span class="badge bg-secondary me-1">Médio porte</span>
                <span class="badge bg-secondary">4 anos</span>
              </div>
              <p class="card-text flex-grow-1">Luke é um gato independente mas muito carinhoso quando quer. Ideal para quem trabalha fora e busca um companheiro tranquilo.</p>
              <div class="mt-auto">
                <a href="#" class="btn btn-primary w-100">Quero adotar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Paginação -->
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mt-4">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Próxima</a>
          </li>
        </ul>
      </nav>
      
      <!-- Informações sobre adoção -->
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="card bg-terciary">
            <div class="card-body">
              <h3 class="card-title text-center">Como funciona o processo de adoção?</h3>
              <div class="row mt-4">
                <div class="col-md-4 text-center">
                  <div class="mb-3"><i class="fas fa-search fa-3x text-primary"></i></div>
                  <h5>1. Escolha seu amigo</h5>
                  <p>Navegue pelos nossos animais disponíveis e encontre aquele que combina com você.</p>
                </div>
                <div class="col-md-4 text-center">
                  <div class="mb-3"><i class="fas fa-file-alt fa-3x text-primary"></i></div>
                  <h5>2. Preencha o formulário</h5>
                  <p>Preencha o formulário de interesse para iniciarmos o processo.</p>
                </div>
                <div class="col-md-4 text-center">
                  <div class="mb-3"><i class="fas fa-home fa-3x text-primary"></i></div>
                  <h5>3. Leve para casa</h5>
                  <p>Após análise, agendamos a visita e você pode levar seu novo amigo para casa!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection