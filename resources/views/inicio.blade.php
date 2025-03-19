@extends('_partials/main')

@section('conteudo')

<nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="#animais">Animais</a></li>
            <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <header class="text-center py-5">
      <div class="container">
        <h1>Encontre seu novo melhor amigo</h1>
        <p class="lead">Dê um lar para um animal carente.</p>
        <a href="#animais" class="btn btn-custom btn-lg">Ver Animais</a>
      </div>
    </header>
    
    <section id="animais" class="container my-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Animal">
            <div class="card-body">
              <h5 class="card-title">Nome do Animal</h5>
              <p class="card-text">Descrição breve do animal.</p>
              <a href="#" class="btn btn-custom">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

