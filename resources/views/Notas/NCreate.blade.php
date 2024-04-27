@extends('Plantilla')

@section('titulo', 'Crear Nota')

@section('contenido')
    <div class="container mt-4" style="background-color: #ffc0cb;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #ffabaf;">
                        <h4 class="mb-0"><i class="bi bi-file-plus"></i> Creacion de Nota</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('nota.store') }}" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3 row">
                                <label for="categoria" class="col-sm-2 col-form-label"><b>Categoría:</b></label>
                                <div class="col-sm-10">
                                    <select id="categoria" name="categoria" class="form-select" required>
                                        @forelse($categorias as $categoria)
                                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                        @empty
                                            <option disabled>No hay categorías</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="color" class="col-sm-2 col-form-label">Color:</label>
                                <div class="col-sm-4">
                                    <input type="color" class="form-control @error('color') is-invalid @enderror" name="color"
                                        id="color" value="{{ old('color') }}" required>
                                    @error('color')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <label for="fecha" class="col-sm-2 col-form-label">Fecha de creacion:</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha"
                                        id="fecha" value="{{ old('fecha') }}" required>
                                    @error('fecha')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="etiqueta" class="form-label">Etiquetas:</label>
                                <input type="text" class="form-control @error('etiqueta') is-invalid @enderror" name="etiqueta"
                                    id="etiqueta" placeholder="Ingrese la etiqueta" value="{{ old('etiqueta') }}" required>
                                @error('etiqueta')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título de la nota:</label>
                                <input type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo"
                                    id="titulo" placeholder="Ingrese el Título" value="{{ old('titulo') }}" required>
                                @error('titulo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="contenido" class="form-label">Contenido de la nota:</label>
                                <textarea class="form-control @error('contenido') is-invalid @enderror" placeholder="Ingrese el Contenido" id="contenido"
                                    name="contenido" rows="4" required>{{ old('contenido') }}</textarea>
                                @error('contenido')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i> Crear la nota</button>
                                <a type="reset" href="{{ route('nota.crear')}}" class="btn btn-warning">
                                <i class="fas fa-eraser"></i>Limpiar</a>
                                <a href="{{ route('nota.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Atras</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            'use strict';

            var forms = document.querySelectorAll('.needs-validation');

            Array.from(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
@endsection

