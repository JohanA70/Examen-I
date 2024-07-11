<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Examen I Johan</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Apuestas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/apuestas">Lista de Apuestas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/apuestas/jugadores-mayor-3">Apuestas con más de 3 jugadores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/apuestas/CartasvsNoCartas">Comparar Juegos de Cartas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/apuestas/buscar">Buscar Apuestas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/apuestas/crear">Crear Apuesta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
</body>

</html>