
    @extends('_partials/main')

    @section('conteudo')
    
  </head>
  <body>
    
    <!-- Register Section -->
    <section class="register-section">
      <h2>Cadastro</h2>
      <form action="{{ route (registro) }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="fullName" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="fullName" name="nome_completo"  placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" name="senha"  placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control" id="confirmPassword" name="confirmaSenha" placeholder="Confirme sua senha" required>
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

    ...

    @endsection

