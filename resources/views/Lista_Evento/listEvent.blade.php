<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/lista_evento/style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="index.html">Meeting APP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-2">
                <button class="btn btn-primary" type="button">Organizar</button>
            </li>
            <li class="nav-item mx-2">
                <button class="btn btn-primary" type="button">Lista de Eventos</button>
            </li>
            <li class="nav-item mx-2">
                <button class="btn btn-primary" type="button">Iniciar Sesion</button>
            </li>
            <li class="nav-item mx-2">
                <button class="btn btn-primary" type="button">Registrarse</button>
            </li>
        </ul>
    </nav>


    <div class="container" style="width: 75%;">
        <div class="my-3">
            <input class="form-control" type="text" placeholder="Search" style="height: 50px;">
        </div>

        <div class="row">
            <div class="col">
                <input class="form-control" type="date" id="start-date">
            </div>
            <div class="col">
                <input class="form-control" type="date" id="end-date">
            </div>
        </div>

        <!-- Bootstrap Album -->
        <div class="row my-3">
            <div class="col-12">
            <div class="card m-2" style="width: 15rem;">
                <img src="img/pagina_index/event-teatro.jpg" class="card-img-top mt-1" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
              <a href="#" class="mr-3">
                <img class="img-fluid" src="https://via.placeholder.com/200" alt="Image placeholder">
              </a>
              <a href="#" class="mr-3">
                <img class="img-fluid" src="https://via.placeholder.com/200" alt="Image placeholder">
              </a>
              <a href="#" class="mr-3">
                <img class="img-fluid" src="https://via.placeholder.com/200" alt="Image placeholder">
              </a>
              <a href="#" class="mr-3">
                <img class="img-fluid" src="https://via.placeholder.com/200" alt="Image placeholder">
              </a>
              <a href="#" class="mr-3">
                <img class="img-fluid" src="https://via.placeholder.com/200" alt="Image placeholder">
              </a>
            </div>
          </div>
            <!-- Repeat for other images... -->
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>