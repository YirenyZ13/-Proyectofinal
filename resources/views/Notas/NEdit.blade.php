@extends('Plantilla')

@section('titulo', 'Editar Nota')

@section('contenido')

    <br><br>
    <form method="POST" action="{{ route('nota.update', [$notas->id]) }}" class="needs-validation" style="background-color: #fce4ec;">
        @method('PUT')
        @csrf

        <div class="container" style="max-width: 800px;">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #ffcdd2;">
                    <h4>Editar Nota</h4>
                    <div>
                        
                                  <div class="card-title" style="font-weight: bold;">Fecha de creacion:
    <input type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha"
        id="fecha" placeholder="Seleccione la nueva Fecha"
        value="{{ old('fecha') ?? $notas->fecha }}" required>

                <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="color" class="form-label">Color de la Nota:</label>
                                        <input type="color" class="form-control form-control-color @error('color') is-invalid @enderror" name="color" id="color" value="{{ old('color') }}" required>
                                        @error('color')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                             


   

                            <div class="mb-3">
                                <label for="categoria" class="form-label"><b>Categoría:</b></label>
                                <select id="categoria" name="categoria" class="form-select" required>
                                    @forelse($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @empty
                                        <option disabled>No hay categorías</option>
                                    @endforelse
                                </select>
                            </div>

                <div class="card">
                    <div class="card-body">

                        <div class="card-title" style="font-weight: bold;">Titulo de la nota:
                            <input type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo"
                                id="titulo" placeholder="Ingrese el nuevo Titulo"
                                value="{{ old('titulo') ?? $notas->titulo }}" required>

                            @error('titulo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div><br>

                        <div class="card-title" style="font-weight: bold;">Contenido de la nota:
                            <textarea class="form-control @error('titulo') is-invalid @enderror" placeholder="Ingrese el nuevo Contenido"
                                id="contenido" name="contenido" rows="4" value="{{ old('contenido') ?? $notas->contenido }}" required></textarea>

                            @error('contenido')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div><br>

                    
                        
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="etiqueta" class="form-label">Etiqueta:</label>
                                <input type="etiqueta" class="form-control @error('etiqueta') is-invalid @enderror" name="etiqueta"
                                    id="etiqueta" placeholder="Ingrese la etiqueta" value="{{  old('etiqueta') ?? $notas->etiqueta }}" required>
                                @error('etiqueta')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-custom-primary">Editar la nota</button>
                            <a href="{{ route('nota.index') }}" class="btn btn-custom-success">Atras</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <style>
        .btn-custom-primary {
            background-color: #ff5733; 
            color: white;
        }

        .btn-custom-success {
            background-color: #33ccff; 
            color: white;
        }
    </style>

@endsection