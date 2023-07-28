<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/profile/style.css">
  <title>Perfil de Usuario</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Perfil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Organizar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Lista de eventos</a>
            </li>
        </ul>
    </div>
</nav>


  <!-- User Profile -->
  <div class="container py-5">
    <div class="row">
      <!-- User photo -->
      <div class="col-md-1">
        <img src="https://www.spongebobshop.com/cdn/shop/products/SB-Standees-Spong-1_800x.jpg?v=1603744567" alt="User Photo" class="img-thumbnail">
      </div>
      <div class="col-md-3">
        <!-- User location and Edit profile button -->
        <h2>Nombre de Usuario: <button class="btn btn-primary">Editar Perfil</button></h2>
        <p>Localización: <span id="user-location">Lugar del usuario</span></p>

        <!-- User's event history -->
        <p>Eventos Organizados: <span id="events-hosted">0</span></p>
        <p>Eventos Asistidos: <span id="events-assisted">0</span></p>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
