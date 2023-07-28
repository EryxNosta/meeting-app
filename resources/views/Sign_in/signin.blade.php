<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sign_in/csssignin.css">
    <title>Signin</title>      
</head>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navyb">
      <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Meeting APP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    {{-- blade call for other pages - redirection use the php call echo. --}}
                    <a class="nav-link" href="{{url('Lista_Evento')}}">Organizar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Eventos</a>
                </li>
            </ul>
            <nav class="navbar bg-dark">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <div class="d-flex justify-content-end mt-2 mr-3">
                <button type="button" class="btn btn-primary me-2">Registrarse</button>
                
            </div>
            
              
          </div>
      </div>
    </nav>  
    
    
    
    <div class="signin d-flex justify-content-center align-items-center">
        <main class="form-signin w-100 m-10">        
            <form>            
                <h1 class="h1 mb-3 fw-normal yellowc">Por favor, inicie sesión.</h1>
    
                <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Dirección de correo</label>
                </div>
                <br>
                <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
                <br>
                </div>
                    <button class="btn btn-primary w-100 py-2 tealb redc" type="submit">Iniciar sesión</button>
                </div>
    
                <!-- opcion de recuerdame (verlo mas tarde)
                <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                
                <label class="form-check-label yellowc" for="flexCheckDefault">
                    Recuerdame
                </label>-->
                                
            </form>
        </main> 

    </div>    

    <footer class="py-3 my-4 border-top yellowb d-flex flex-wrap justify-content-between align-items-center">
        <p class="col-md-4 mb-0 text-body-secondary navyc yellowb">&copy; 2023 Company, Inc</p>
    
        <ul class="nav col-md-8 justify-content-end redc" >
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary redc">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary redc">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary redc">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary redc">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary redc">About</a></li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
