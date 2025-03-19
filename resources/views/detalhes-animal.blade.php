<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Macaco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #F4E2DE;
        color: #025259;
        font-family: 'Arial', sans-serif;
      }
      .navbar {
        background-color: #007172;
      }
      .navbar a {
        color: #F4E2DE;
      }
      .animal-detail-section {
        padding: 50px 0;
      }
      .container {
        max-width: 1200px;
      }
      .animal-img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 15px;
      }
      .animal-info {
        background-color: #F4E2DE;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
      }
      .animal-title {
        color: #025259;
        font-weight: bold;
        font-size: 2rem;
        margin-bottom: 15px;
      }
      .animal-description {
        color: #007172;
        font-size: 1.1rem;
        margin-bottom: 20px;
      }
      .btn-primary {
        background-color: #F29325;
        border: none;
        color: #025259;
        padding: 12px 25px;
        border-radius: 8px;
        font-weight: bold;
        transition: background-color 0.3s;
      }
      .btn-primary:hover {
        background-color: #D94F04;
        color: #F4E2DE;
      }
      .footer {
        background-color: #025259;
        color: #F4E2DE;
        text-align: center;
        padding: 25px 0;
        position: fixed;
        width: 100%;
        bottom: 0;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
      }
      .heading {
        color: #025259;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 40px;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
      }
    </style>
  </head>
  <body>
    
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
              <a class="nav-link" href="#">Animais Disponíveis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cadastro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Animal Details Section -->
    <section class="animal-detail-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- Animal Image -->
            <img src="https://img.quizur.com/f/img64ed28b86e1048.10881938.jpg?lastEdited=1693264059?o=feed" class="animal-img" alt="Macaco">
          </div>
          <div class="col-lg-6">
            <!-- Animal Info -->
            <div class="animal-info">
              <h2 class="animal-title">Macaco Calvo</h2>
              <p class="animal-description">
                Este macaco é muito brincalhão e adora interação com pessoas. Ele é curioso, energético e adoraria ser parte de uma família que ofereça muito amor e atenção.
              </p>
              <ul>
                <li><strong>Idade:</strong> 4 anos</li>
                <li><strong>Raça:</strong> Macaco-calvo</li>
                <li><strong>Temperamento:</strong> Curioso, amigável e ativo e calvo</li>
                <li><strong>Saúde:</strong> Vacinas em dia, exames realizados e calvo tambem</li>
                <li><strong>Comportamento:</strong> Sociável com seres humanos pois não tem cabelo, mas precisa de espaço para se movimentar pois já perdeu tudo que tinha como o seu cabelo</li>
              </ul>
              <a href="#" class="btn btn-primary">Adotar este Macaco</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <p>&copy; 2025 Adoção de Animais | Todos os direitos reservados</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
