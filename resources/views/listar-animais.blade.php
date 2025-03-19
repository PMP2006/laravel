<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animais para Adoção</title>
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
      .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background: white;
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
    
    <div class="container my-5">
      <h2 class="text-center">Animais Disponíveis para Adoção</h2>
      <div class="row mt-4">
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
    </div>
    
    <footer class="footer">
      <p>&copy; 2025 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
