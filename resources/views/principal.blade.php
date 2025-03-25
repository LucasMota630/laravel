@extends('_partials/body')

@section('conteudo')
    <div class="container mt-5">
      <h1 class="text-center">Encontre seu novo amigo!</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_vc6QTvSPasuk51l7tyLZCpoYADJ9wW-3vA&s" class="card-img-top" alt="Cachorro 1">
            <div class="card-body">
              <h5 class="card-title">Rex</h5>
              <p class="card-text">Rex é um cachorro muito brincalhão e adora crianças.</p>
              <a href="adocao" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTxy_UBy5ZeLLs7iU4_B2oCb4BELrw1d4SIg&s" class="card-img-top" alt="Gato 1">
            <div class="card-body">
              <h5 class="card-title">Mimi</h5>
              <p class="card-text">Mimi é uma gatinha carinhosa e tranquila.</p>
              <a href="adocao" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7kld85h-aFiF-ckliUO37zYozeVvaQnnfGw&s" class="card-img-top" alt="Cachorro 2">
            <div class="card-body">
              <h5 class="card-title">Bela</h5>
              <p class="card-text">Bela é uma cachorrinha muito dócil e amorosa.</p>
              <a href="adocao" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection