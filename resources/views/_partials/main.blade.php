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
  <body>
    
   @include('_partials/menu')

    @yield('conteudo')
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
