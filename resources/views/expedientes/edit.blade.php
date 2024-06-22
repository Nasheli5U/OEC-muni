@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Expediente</h1>
    <form action="{{ route('expedientes.update', $expediente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $expediente->apellidos }}" required>
        </div>
        <div class="mb-3">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $expediente->nombres }}" required>
        </div>
        <div class="mb-3">
            <label for="nExpediente" class="form-label">N° Expediente</label>
            <input type="number" class="form-control" id="nExpediente" name="nExpediente" value="{{ $expediente->nExpediente }}" required>
        </div>
        <div class="mb-3">
            <label for="fechaNot" class="form-label">Fecha Notificación</label>
            <input type="date" class="form-control" id="fechaNot" name="fechaNot" value="{{ $expediente->fechaNot }}" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" value="{{ $expediente->estado }}" required>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" step="0.01" value="{{ $expediente->precio }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
