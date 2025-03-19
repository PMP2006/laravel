<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Adoção de Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #012326;
        color: white;
      }
      .navbar {
        background-color: #48BF36;
      }
      .btn-custom {
        background-color: #F2B807;
        color: white;
      }
      .btn-custom:hover {
        background-color: #D9601A;
      }
      .register-container {
        max-width: 400px;
        margin: 50px auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        color: #012326;
      }
      .footer {
        background-color: #8C1207;
        color: white;
        text-align: center;
        padding: 10px;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">Adote um Amigo</a>
      </div>
    </nav>
    
    <div class="register-container">
      <h2 class="text-center">Criar Conta</h2>
      <form>
        <div class="mb-3">
          <label for="nome" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Crie uma senha">
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-custom">Registrar</button>
        </div>
      </form>
      <p class="text-center mt-3">Já tem uma conta? <a href="login.html">Faça login</a></p>
    </div>
    
    <footer class="footer">
      <p>&copy; 2025 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>