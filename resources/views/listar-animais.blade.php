<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animais Disponíveis para Adoção</title>
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
      .animals-section {
        padding: 50px 0;
      }
      .container {
        max-width: 1200px;
      }
      .animal-card {
        background-color: #F4E2DE;
        border-radius: 15px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .animal-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 36px rgba(0, 0, 0, 0.2);
      }
      .animal-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 15px 15px 0 0;
      }
      .animal-card .p-3 {
        padding: 20px;
      }
      .animal-title {
        color: #025259;
        font-weight: bold;
        font-size: 1.5rem;
        margin-bottom: 10px;
      }
      .animal-description {
        color: #007172;
        font-size: 1rem;
        margin-bottom: 15px;
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
     
        width: 100%;
        bottom: 0;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
      }
      .animal-card .btn-primary {
        width: 100%;
        margin-top: 10px;
      }
      .heading {
        color: #025259;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 40px;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
      }
      .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }
      @media (max-width: 768px) {
        .animal-img {
          height: 200px;
        }
        .animal-title {
          font-size: 1.25rem;
        }
        .animal-description {
          font-size: 0.9rem;
        }
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
              <a class="nav-link active" href="#">Animais Disponíveis</a>
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

    <!-- Animals Section -->
    <section class="animals-section">
      <div class="container">
        <h2 class="heading">Animais Disponíveis para Adoção</h2>
        <div class="row">
          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="animal-card">
              <img src="https://img.quizur.com/f/img64ed28b86e1048.10881938.jpg?lastEdited=1693264059?o=feed" class="animal-img" alt="Cachorro Feliz">
              <div class="p-3">
                <h5 class="animal-title">Macaco Calvo</h5>
                <p class="animal-description">Macaco calvo e chave,gosta de fumar um banza mas é gente boa</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="animal-card">
              <img src="https://preview.redd.it/cd52ymd4p9e61.png?auto=webp&s=7174018d5699704530fea8bfe529444f0be005bc" class="animal-img" alt="Gato Meigo">
              <div class="p-3">
                <h5 class="animal-title">Gato Meigo</h5>
                <p class="animal-description">Gatinha doce e tranquila, que adora um carinho.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="animal-card">
              <img src="https://i.pinimg.com/736x/ff/6b/c4/ff6bc483e8a34cc902eace6988e5e3e7.jpg" class="animal-img" alt="Cachorro Alegre">
              <div class="p-3">
                <h5 class="animal-title">Cachorro Alegre</h5>
                <p class="animal-description">Cãozinho energético que adora brincar e fazer companhia.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
          <!-- Card 4 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="animal-card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXP6m0KB1s0dzrk5XxEIVXCKPL1PtynSrZbw&s" class="animal-img" alt="Gatinho Brincalhão">
              <div class="p-3">
                <h5 class="animal-title">Gatinho Brincalhão</h5>
                <p class="animal-description">Gato jovem e cheio de energia, perfeito para quem gosta de brincadeiras.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
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
  </body>
</html>
