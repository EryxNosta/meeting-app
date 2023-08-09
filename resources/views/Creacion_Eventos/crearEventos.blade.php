<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/crear_Eventos/style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navyb">
        <div class="container-fluid">
            <a class="navbar-brand" href="Pagina_Index">Juntáte!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link" href="/Lista_Evento">Eventos</a>
                    </li>
                </ul>
    
                <div class="btn-group" role="group" aria-label="Basic example">
                   <a href="/register"><button type="button" class="btn btn-warning">Registrarse</button></a>
                    <a href="/login"><button type="button" class="btn btn-warning">Iniciar Sesion</button></a>
                </div>
            </div>
        </div>
      </nav>  
    <div class="container">
        
        <div class="text-center mt-3 pb-3">
            <h1>¡Crea tu evento aquí!</h1>
            <p>
                Llena la solicitud para poder crear tu evento. <br>
                Verifica la informacion y envia tu solicitud, al ser recibida sera validada y nos pondremos en contacto.
            </p>
        </div>


        <form method="POST" action="/profile">
        @csrf
    
        <!-- Equivalent to... -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </form>

        
        <form class="row g-4 mt-3 pb-3 shadow-lg" action="{{ route('Eventos.Registro')}}" method="POST">
            @csrf

            <div class="col-6">
                <label for="InputName" class="form-label">Nombre del evento</label>
                <input type="text" name="even_nom" class="form-control" id="InputName" placeholder="Nombre del evento">
            </div>

            <div class="col-6">
                <label for="InputAddress" class="form-label">Dirección del evento</label>
                <input type="text" name="even_adrs" class="form-control" id="InputAddress" placeholder="Dirección del evento">
            </div>

            <div class="col-6">
                <label for="InputDate" class="form-label">Fecha del evento</label>
                <input type="date" name="even_date" class="form-control" id="InputDate" placeholder="Tema del evento">
            </div>

            <div class="col-6">
                <label for="InputPrice" class="form-label">Precio</label>
                <input type="text" class="form-control" id="InputPrice" placeholder="Precio del evento">
            </div>

            <div class="col-6">
                <label for="InputCategory" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="InputCategory" placeholder="Categoria del evento">
            </div>

            <div class="col-12">
                <label for="InputDesc" class="form-label">Descripción del evento</label>
                <input type="text" name="even_desc" class="form-control" id="InputDesc" placeholder="Descripción del evento">
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input type="checkbox" id="checkTerms" class="form-check-input">
                    <label for="checkTerms" class="form-check-label">Acepto los terminos</label>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar Evento</button>
            </div>

        </form>
    </div>

    <div class="container mt-5 bg-y">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>
      
          <a href="" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href=""/></svg>
          </a>
      
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="Pagina_Index" class="nav-link px-2 text-body-secondary txt-red">Inicio</a></li>
            <li class="nav-item"><a href="Lista_Evento" class="nav-link px-2 text-body-secondary txt-red">Eventos</a></li>
          </ul>
        </footer>
    </div>

        <!--JavaScript and dependencies-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>