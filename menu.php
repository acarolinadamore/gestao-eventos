<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestão de Eventos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --accent: rgb(173, 135, 65);
    }

    .navbar {
      padding: 15px 0;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      background-image: url('img/black-lines.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-color: rgba(0, 0, 0, 0.5);
      background-blend-mode: multiply;
    }

    .navbar-brand {
      font-size: 2rem;
      font-weight: 700;
      color: white !important;
      letter-spacing: 1px;
    }

    .nav-link {
      color: white !important;
      font-weight: 500;
      transition: color 0.3s;
    }

    .nav-link:hover {
      color: var(--accent) !important;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <i class="fas fa-calendar-check me-2"></i>Evenza
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="listar-eventos.php">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastrar-evento.php">Novo Evento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listar-participantes.php">Participantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastrar-participante.php">Novo Participante</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
