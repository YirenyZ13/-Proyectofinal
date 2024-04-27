<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>@yield('titulo')</title> 


    <style>
        .navbar {
            background-color: rosybrown;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
    <a class="navbar-brand" style="color: white;" href="{{ route('nota.index') }}"> Notas Personales</a>
    <button class="navbar-toggler btn btn-outline-danger" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
 <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active btn btn-danger" aria-current="page" href="{{ route('nota.crear') }}">Crear una Nota</a>
                    </li>
                </ul>
</div>
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <button type="button" class="btn btn-danger" style="color: white; border-color: yellow;" data-bs-toggle="modal" data-bs-target="#modal-categoria">
                Crear una Categoría
            </button>

            <div class="modal" id="modal-categoria" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Crear una Categoría</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('categoria.store') }}" class="needs-validation">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre de la Categoría:</label>
                        <input type="text" name="nombre" class="form-control" required>
                        <div class="invalid-feedback">Por favor ingrese el nombre de la categoría.</div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Creacion de la Categoría</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div>
        @yield('contenido')
    </div>

</body>

</html>