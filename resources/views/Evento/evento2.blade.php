<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/evento/cssevento.css">
    <title>Evento2</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navyb">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Juntáte!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
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
                    <button type="button" class="btn btn-warning">Registrarse</button>
                    <button type="button" class="btn btn-warning ">Iniciar Sesión</button>
                </div>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row m-1 main-imgevent">
            <div class="col-md-12 img-fluid">
                <img src="\img\evento2\digitalWeek.jpg" width="100%" height="auto">
            </div>

        </div>


        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom navyc">
                    DIGITAL WEEK USAP
                </h3>

                <article class="blog-post">
                    <h4 class="display-5 link-body-emphasis mb-1">Descripción: </h4>
                    <p class="">
                        La USAP se sumerge en una emocionante semana de innovación y aprendizaje durante su "Digital
                        Week", un evento que encapsula la esencia de la era digital en la que vivimos. Durante este
                        apasionante encuentro de una semana, el espacio de co-working se llena de energía y curiosidad,
                        mientras estudiantes, profesores y expertos en tecnología se reúnen para explorar los límites de
                        la digitalización y sus impactos en todas las facetas de la vida moderna. Los talleres
                        interactivos y presentaciones de
                        Los talleres interactivos y presentaciones de proyectos ofrecen una perspectiva sobre temas de
                        actualidad y lo aprendido en el día a día en las aulas de clases.
                    </p>
                    <hr>
                    <button type="button" class="btn btn-primary btn-lg tealb redc">Reservar</button>
                </article>

            </div>
            <div class="col-md-4 ">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded yellowb">
                        <h4 class="fst-italic">Información general</h4>
                        <br>
                        <h5>Dirección:</h5>
                        <p class="mb-0">Universidad de San Pedro Sula</p>
                        <br>
                        <h5>Fecha:</h5>
                        <p class="mb-0">Jueves 03 de agosto <del></del> 2023.</p>
                        <br>
                        <h5>Precio por persona:</h5>
                        <p class="mb-0">Lps. 10.00 </p>
                    </div>

                    <div>
                        <h4 class="fst-italic">Información del patrocinador</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="https://www.identitymission.org/?fbclid=IwAR2eeb5igHwvXFG98xwwT5COB3pKOKb0Oy1qZa8ZPMYV44ux75oE-kACPb8">
                                    <img class="bd-placeholder-img" width="100%" height="96"
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/La_Prensa_%28Honduras%29.svg/2560px-La_Prensa_%28Honduras%29.svg.png"
                                        alt="">
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
            <p class="col-md-4 mb-0 text-body-secondary navyc yellowb">&copy; 2023 Juntáte, Inc</p>

            <a href=""
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="" />
                </svg>
            </a>

            <ul class="nav col-md-4 justify-content-end redc">
                <li class="nav-item"><a href="{{url('/')}}" class="nav-link px-2 text-body-secondary redc">Inicio</a></li>
                <li class="nav-item"><a href="{{url('evento')}}" class="nav-link px-2 text-body-secondary redc">Eventos</a></li>
                <li class="nav-item"><a href="{{url('/Lista_Evento')}}" class="nav-link px-2 text-body-secondary redc">Listado de
                        Eventos</a></li>
                <li class="nav-item"><a href="{{url('/Creacion_Eventos')}}" class="nav-link px-2 text-body-secondary redc">Organizar</a>
                </li>
            </ul>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
