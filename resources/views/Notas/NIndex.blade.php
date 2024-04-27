@extends('Plantilla')

@section('titulo', 'Notas')

@section('contenido')

    @if (session('mensaje'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('mensaje') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container mt-4" style="background-color: #ffcccc;">
        <div class="row">
            @forelse($notas as $nota)
                <div class="col-md-12 mb-4">
                    <div class="card">
                    <div class="card-header  text-black" style="background: {{ $nota->color }};">
                            {{ $nota->titulo }}
                        </div>
                        <div class="card-body">
                            <p class="card-text font-weight-bold">Categoría: {{ $nota->categoria }}</p>
                            <p class="card-text font-weight-bold">Etiqueta: {{ $nota->etiqueta }}</p>
                            <p class="card-text">{{ $nota->contenido }}</p>
                            <p class="card-text"><small class="text-muted">Fecha de creacion: {{ $nota->fecha }}</small></p>
                        </div>
                        <div class="card-footer d-flex justify-content-between"> <!-- Cambio de clase aquí -->
                            <a href="{{ route('nota.editar', ['id' => $nota->id]) }}" class="btn btn-secondary me-2">Editar la nota</a>
                            <a href="{{ route('nota.show', ['id' => $nota->id]) }}" class="btn btn-success me-2">Ver la nota</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{ $nota->id }}">
                                Eliminar la nota
                            </button>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal-{{ $nota->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar la nota</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>¿Estas seguro que quieres eliminarla?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-bs-dismiss="modal">No</button>
                                <form method="post" action="{{ route('nota.borrar', [$nota->id]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Eliminar la nota</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <p class="col-12">No hay notas.</p>
            @endforelse
        </div>
    </div>
    
    <div class="container text-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{ $notas->render('pagination::bootstrap-4') }}
            </ul>
        </nav>
    </div>

@endsection

@section('estilos')
    <style>
        .card-footer .btn {
            margin-right: 10px; 
        }
    </style>
@endsection
