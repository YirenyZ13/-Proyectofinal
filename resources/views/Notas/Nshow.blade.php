@extends('Plantilla')

@section('titulo', 'Detalle de Nota')

@section('contenido')

    <div class="container mt-4" style="background-color: #ffcccc;">
        <div class="card" style="background-color: #ffd9e6;">
            <div class="card-header bg-pink text-white">
                <h4 class="mb-0">Detalles de Nota</h4>
            </div>

            <div class="card-body">
                <div class="mb-3">
                    <h5 class="card-title font-weight-bold" style="color: #ff66b3;">{{ $nota->titulo }}</h5>
                </div>

                <div class="mb-3">
                    <p class="card-text"><b>Categoría:</b> {{ $nota->categoria }}</p>
                </div>

                <div class="mb-3">
                    <p class="card-text"><b>Contenido de la nota:</b><br>{{ $nota->contenido }}</p>
                </div>

                <div class="mb-3">
                    <p class="card-text"><b>Fecha de creacion:</b> {{ $nota->fecha }}</p>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('nota.index') }}" class="btn btn-outline-dark">Atras</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            border-bottom: none;
            border-radius: 10px 10px 0 0;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .card-text {
            color: #666;
        }

        .btn {
            border-radius: 8px;
            padding: 8px 16px;
        }
    </style>

@endsection
