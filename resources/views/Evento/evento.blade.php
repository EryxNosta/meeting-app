<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/evento/cssevento.css">
    <title>Evento</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navyb">
    <div class="container-fluid">
        <a class="navbar-brand" href="Pagina_Index">Meeting APP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link" href="/Creacion_Eventos">Organizar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Lista_Evento">Eventos</a>
                </li>
            </ul>

            <div class="btn-group" role="group" aria-label="Basic example">
               <a href="/register"><button type="button" class="btn btn-primary">Registrarse</button></a>
                <a href="/login"><button type="button" class="btn btn-primary">Iniciar Sesion</button></a>
            </div>
        </div>
    </div>
  </nav>  
 
  <main class="container">
    <div class="row m-1 main-imgevent">
      <div class="col-md-12 img-fluid" >
          <img src="img/evento/portada.jpg" width="100%" height="auto">
      </div>
      
    </div>
  
     
    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom navyc">
          OBRA DE TEATRO CIPOTES
        </h3>
  
        <article class="blog-post">
          <h4 class="display-5 link-body-emphasis mb-1">Descripción: </h4>           
          <p class="">Obra de Teatro "CIPOTES" Una adaptacion del libro de Ramon Amaya Amador. La obra incluye la dolorosa realidad que viven dos hermanitos por sobrevivir solos, sin sus padres. Una realidad que aun es vivida en nuestro pais. El evento es a beneficio de Mision Identidad, quienes se esfuerzan por buscar soluciones en familia para NNA vulnerables. Con el donativo y apoyo de La Teatral Sampedrana y Ministerio AMADA se llevara a cabo la obra de Teatro Cipotes el dia 23 de Septiembre, 2023 en las instalaciones de Centro Cultural Infantil en San Pedro Sula. El evento tiene un costo de L400 por persona.</p>
          <hr>           
          <button type="button" class="btn btn-primary btn-lg tealb redc">Reservar</button>      
        </article>
          
    </div>
      <div class="col-md-4 ">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-body-tertiary rounded yellowb">
            <h4 class="fst-italic">Información general</h4>
            <br>
            <h5 >Dirección:</h5>
            <p class="mb-0">Centro Cultural Infantil Centro Cultural Infantil San Pedro Sula, Cortés Department 21104.</p>
            <br>
            <h5 >Fecha:</h5>
            <p class="mb-0">Sábado 23 de septiembre 2023.</p>
            <br>
            <h5 >Precio por persona:</h5>
            <p class="mb-0">Lps. 400.00 </p>
          </div>
  
          <div>
            <h4 class="fst-italic">Información del patrocinador</h4>
            <ul class="list-unstyled">
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="https://www.identitymission.org/?fbclid=IwAR2eeb5igHwvXFG98xwwT5COB3pKOKb0Oy1qZa8ZPMYV44ux75oE-kACPb8">
                  <img class="bd-placeholder-img" width="100%" height="96" src="img/evento/logo_patrocinador.jpg" alt="">
                
                  
                </a>
              </li>
                            
            </ul>
          </div>
             
        </div>
      </div>
    </div>
  
  </main>
  
  <div class="container yellowb ">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary navyc yellowb">&copy; 2023 Company, Inc</p>
  
      <a href="" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href=""/></svg>
      </a>
  
      <ul class="nav col-md-4 justify-content-end redc" >
        <li class="nav-item"><a href="Pagina_Index" class="nav-link px-2 text-body-secondary redc">Inicio</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary redc">Acerca de Nosotros</a></li>
      </ul>
    </footer>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
