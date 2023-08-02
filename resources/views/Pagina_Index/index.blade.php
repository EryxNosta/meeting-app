<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/pagina_index/style.css">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Meeting APP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link" href="Creacion_Eventos">Organizar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Eventos</a>
                    </li>
                </ul>
                <nav class="navbar bg-navbar">
                    <div class="container-fluid">
                    </div>
                </nav>
                <div class="btn-group" role="group" aria-label="Basic example">
                  @if (Route::has('login'))
                  <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                      @auth
                          <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                      @else
                          <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
  
                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrate</a>
                          @endif
                      @endauth
                  </div>
              @endif
                </div>
            </div>
        </div>
      </nav>
      <main class="container">
        <div class="row m-1 main-img">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6 color text-center main-info">
                <h1>Encuentra tu evento favorito y vive momentos inolvidables.</h1>
                <p>Únete a nosotros y déjanos ser tu aliado confiable en el camino hacia eventos exitosos y llenos de magia.</p>
                <a href="{{ route('register') }}"><button type="button" class="btn btn-primary">Empecemos!</button></a>
            </div>
        </div>
        <div class="row justify-content-center mt-5">

            <h1 class="text-center">Eventos proximos</h1>

            <div class="card m-2" style="width: 15rem;">
                <img src="img/evento/portada.jpg" class="card-img-top mt-1" alt="..."height="200px" width="500px">
                <div class="card-body">
                  <h5 class="card-title">Cipotes</h5>
                  <p class="card-text">Una adaptacion del libro de Ramon Amaya Amador. La obra incluye la dolorosa realidad que viven dos hermanitos por sobrevivir solos.</p>
                </div>
                <a href="{{url('evento')}}" class="btn btn-primary">Ir al evento</a>
            </div>
            <div class="card m-2" style="width: 15rem;">
                <img src="img/pagina_index/Navidad.png" class="card-img-top mt-1" alt="..."height="200px" width="500px">
                <div class="card-body">
                  <h5 class="card-title">Reunion Navidad</h5>
                  <p class="card-text">Encuentra todo lo que necesitas para crear un evento de empresa navideño que tus empleados SÍ van a recordar.</p>
                </div>
                <a href="#" class="btn btn-primary">Ir al evento</a>
            </div>
            <div class="card m-2" style="width: 15rem;">
                <img src="img/pagina_index/halloween.jpg" class="card-img-top mt-1" alt="..."height="200px" width="500px">
                <div class="card-body">
                  <h5 class="card-title">Fiesta Halloween</h5>
                  <p class="card-text">Una fiesta que se celebra el 31 de octubre, víspera de la fiesta cristiana occidental de Todos los Santos.</p>
                </div>
                <a href="#" class="btn btn-primary">Ir al evento</a>
            </div>
            <div class="card m-2" style="width: 15rem;">
                <img src="img/pagina_index/Graduacion.jpg" class="card-img-top mt-1" alt="..." height="200px" width="500px">
                <div class="card-body">
                  <h5 class="card-title">Graduacion</h5>
                  <p class="card-text">Ceremonia oficial que clausura el curso escolar o universitario y sirve de reconocimiento a los estudiantes que, a lo largo de él, han completado los requisitos académicos de un plan de estudios.</p>
                </div>
                <a href="#" class="btn btn-primary">Ir al evento</a>
            </div>
        </div>
      </main>
      <div class="container bg-y">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>
      
          <a href="" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href=""/></svg>
          </a>
      
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary txt-red">Inicio</a></li>
            <li class="nav-item"><a href="{{url('evento')}}" class="nav-link px-2 text-body-secondary txt-red">Eventos</a></li>
            <li class="nav-item"><a href="{{url('/Lista_Evento')}}" class="nav-link px-2 text-body-secondary txt-red">Listado de Eventos</a></li>
            <li class="nav-item"><a href="{{url('/Creacion_Eventos')}}" class="nav-link px-2 text-body-secondary txt-red">Organizar</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary txt-red">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary txt-red">About</a></li>
          </ul>
        </footer>
      </div>
      
    <!--JavaScript and dependencies-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>