<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro - Adoção de Animais</title>
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
      .register-section {
        max-width: 600px;
        margin: 100px auto;
        padding: 40px;
        background-color: #F4E2DE;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      .register-section h2 {
        color: #025259;
        margin-bottom: 20px;
      }
      .form-label {
        color: #025259;
      }
      .form-control {
        border: 1px solid #007172;
        background-color: #FFF;
      }
      .btn-primary {
        background-color: #F29325;
        border: none;
        color: #025259;
        padding: 12px 20px;
        border-radius: 5px;
        width: 100%;
      }
      .btn-primary:hover {
        background-color: #D94F04;
        color: #F4E2DE;
      }
      .footer {
        background-color: #025259;
        color: #F4E2DE;
        text-align: center;
        padding: 20px 0;
        position: fixed;
        width: 100%;
        bottom: 0;
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
              <a class="nav-link" href="#">Adote um animal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Cadastro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Register Section -->
    <section class="register-section">
      <h2>Cadastro</h2>
      <form>
        <div class="mb-3">
          <label for="fullName" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="fullName" placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control" id="confirmPassword" placeholder="Confirme sua senha" required>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="termsAndConditions" required>
          <label class="form-check-label" for="termsAndConditions">
            Eu concordo com os <a href="#">termos e condições</a>.
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
      <div class="text-center mt-3">
        <p>Já tem uma conta? <a href="#">Faça login aqui</a></p>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <p>&copy; 2025 Adoção de Animais | Todos os direitos reservados</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
