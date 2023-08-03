<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Lista de Eventos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            background-color: #0056b3;
        }

        #event-list {
            margin-top: 20px;
        }

        .event-item {
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .event-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .event-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        .event-date {
            font-size: 14px;
            color: #333;
        }
    </style>
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
                        <a class="nav-link" href="/Creacion_Eventos">Organizar</a>
                    </li>
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
            <h1>Lista de Eventos</h1>
            <p>
                Encuentra eventos según la fecha de inicio y fin seleccionada.
            </p>
        </div>

        <div>
        <form id="search-form" class="row g-4 mt-3 pb-3 shadow-lg" action="{{ route('eventos.search')}}" method="GET">
    @csrf
    <div class="col-md-6">
        <label for="start-date" class="form-label">Fecha de inicio</label>
        <input type="date" class="form-control" id="start-date" name="start_date" required>
    </div>
    <div class="col-md-6">
        <label for="end-date" class="form-label">Fecha de fin</label>
        <input type="date" class="form-control" id="end-date" name="end_date" required>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Buscar Eventos</button>
    </div>
</form>

        </div>

        <div id="event-list">
            <!-- Event results will be displayed here -->
        </div>
    </div>

    <div class="container mt-5 bg-y">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Júntate, Inc</p>
      
          <a href="" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href=""/></svg>
          </a>
      
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="Pagina_Index" class="nav-link px-2 text-body-secondary txt-red">Inicio</a></li>
            <li class="nav-item"><a href="evento" class="nav-link px-2 text-body-secondary txt-red">Eventos</a></li>
            <li class="nav-item"><a href="Creacion_Eventos" class="nav-link px-2 text-body-secondary txt-red">Organizar</a></li>
          </ul>
        </footer>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var form = document.getElementById("search-form");
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Evitar enviar el formulario por defecto

            var startDate = document.getElementById('start-date').value;
            var endDate = document.getElementById('end-date').value;

            // Fetch event data using JavaScript Fetch API
            fetch(`/api/events?start_date=${startDate}&end_date=${endDate}`)
                .then(response => response.json())
                .then(data => {
                    var eventList = document.getElementById('event-list');
                    eventList.innerHTML = ''; // Clear previous results

                    data.forEach(function (event) {
                        var eventItem = document.createElement('div');
                        eventItem.classList.add('event-item'); // Apply styling class
                        eventItem.innerHTML = '<div class="event-name">' + event.even_nom + '</div>' +
                                              '<div class="event-description">Description: ' + event.even_desc + '</div>' +
                                              '<div class="event-date">Date: ' + event.even_date + '</div>' +
                                              '<div class="event-address">Address: ' + event.even_adrs + '</div><br>';
                        eventList.appendChild(eventItem);
                    });
                })
                .catch(error => console.error('Error fetching events:', error));
        });
    });
</script>

    <!--JavaScript and dependencies-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
