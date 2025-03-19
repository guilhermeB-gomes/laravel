@extends('_partials/main')

@section('conteudo')
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Adoção de Animais</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Adote um animal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
      <h1>Adote um animal de rua</h1>
      <p>Transforme a vida de um amigo peludo. Dê uma chance para a felicidade.</p>
      <a href="#" class="cta-button">Adote agora</a>
    </section>

    <!-- Cards Section -->
    <section class="cards-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem de animal">
              <div class="card-body">
                <h5 class="card-title">Cachorro Fofo</h5>
                <p class="card-text">Cachorrinho adorável, espera por um lar cheio de amor.</p>
                <a href="#" class="btn btn-primary">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem de animal">
              <div class="card-body">
                <h5 class="card-title">Gatinho Carinhoso</h5>
                <p class="card-text">Gatinho meigo e carinhoso, pronto para ser adotado!</p>
                <a href="#" class="btn btn-primary">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagem de animal">
              <div class="card-body">
                <h5 class="card-title">Cachorro Amigável</h5>
                <p class="card-text">Companheiro ideal para toda a família!</p>
                <a href="#" class="btn btn-primary">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adoção de Animais de Rua</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #F4E2DE;
        color: #025259;
      }
      .navbar {
        background-color: #007172;
      }
      .navbar a {
        color: #F4E2DE;
      }
      .hero-section {
        background-color: #025259;
        color: #F4E2DE;
        padding: 50px 0;
        text-align: center;
      }
      .cta-button {
        background-color: #F29325;
        color: #025259;
        padding: 15px 30px;
        border-radius: 5px;
        text-decoration: none;
      }
      .cta-button:hover {
        background-color: #D94F04;
        color: #F4E2DE;
      }
      .cards-section {
        padding: 40px 0;
        background-color: #007172;
      }
      .card {
        background-color: #F4E2DE;
        border: none;
        color: #025259;
      }
      .card img {
        border-radius: 8px;
      }
      .card-title {
        font-size: 1.25rem;
        font-weight: bold;
      }
      .footer {
        background-color: #025259;
        color: #F4E2DE;
        text-align: center;
        padding: 20px 0;
      }
    </style>
  </head>
 

    <!-- Footer -->
    <footer class="footer">
      <p>&copy; 2025 Adoção de Animais | Todos os direitos reservados</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
