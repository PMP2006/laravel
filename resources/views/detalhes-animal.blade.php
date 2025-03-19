<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Animal</title>
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
      .container {
        margin-top: 50px;
      }
      .card {
        background: white;
        color: #012326;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="https://s2-vidadebicho.glbimg.com/tdlFyMXiVAoIEBLZXYi5iCQmoAs=/0x0:2048x1536/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_fb623579cd474803aedbbbbae014af68/internal_photos/bs/2022/X/z/TwuBIlTbKuEuKSZ5ErBQ/2-cachorro-cururu-entenda-a-sindrome-que-causa-encurtamento-em-caes.jpeg" class="img-fluid rounded" alt="Foto do Animal">
        </div>
        <div class="col-md-6">
          <div class="card p-4">
            <h2>Nome do Animal</h2>
            <p><strong>Idade:</strong> 2 anos</p>
            <p><strong>Raça:</strong> SRD</p>
            <p><strong>Peso:</strong> 10kg</p>
            <p><strong>Descrição:</strong> Animal dócil e brincalhão, pronto para encontrar um lar amoroso.</p>
            <a href="#" class="btn btn-custom">Adotar</a>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="footer fixed-bottom">
      <p>&copy; 2025 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
