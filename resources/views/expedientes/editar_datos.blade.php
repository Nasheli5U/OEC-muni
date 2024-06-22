@extends('layouts.app')

@section('content')

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Editar Datos de Expediente</h1>
    <form action="{{ route('expedientes.actualizar_datos', $expediente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="n_exp" class="block mb-2">N° Exp.</label>
            <input type="text" id="n_exp" value="{{ $expediente->numero_expediente }}" class="border rounded px-3 py-2" readonly>
        </div>
        <div class="mb-4">
            <label for="apellidos" class="block mb-2">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" value="{{ $expediente->apellidos }}" class="border rounded px-3 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="nombres" class="block mb-2">Nombres</label>
            <input type="text" id="nombres" name="nombres" value="{{ $expediente->nombres }}" class="border rounded px-3 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="direccion" class="block mb-2">Dirección de predio</label>
            <input type="text" id="direccion" name="direccion_predio" value="{{ $expediente->direccion_predio }}" class="border rounded px-3 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="domicilio" class="block mb-2">Domicilio</label>
            <input type="text" id="domicilio" name="domicilio" value="{{ $expediente->domicilio }}" class="border rounded px-3 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="procedencia" class="block mb-2">Procedencia</label>
            <input type="text" id="procedencia" name="procedencia" value="{{ $expediente->procedencia }}" class="border rounded px-3 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="fecha" class="block mb-2">Fecha</label>
            <input type="date" id="fecha" name="fecha" value="{{ $expediente->fecha }}" class="border rounded px-3 py-2">
        </div>
        <div class="mb-4">
            <label for="infraccion" class="block mb-2">Infracción</label>
            <input type="text" id="infraccion" name="infraccion" value="{{ $expediente->infraccion }}" class="border rounded px-3 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="monto" class="block mb-2">Monto</label>
            <input type="text" id="monto" name="monto" value="{{ $expediente->monto }}" class="border rounded px-3 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="resolucion" class="block mb-2">Resolución</label>
            <input type="text" id="resolucion" name="resolucion" value="{{ $expediente->resolucion }}" class="border rounded px-3 py-2 w-full">
        </div>
        <div class="mb-4">
            <label for="medida_complementaria" class="block mb-2">Medida Complementaria</label>
            <input type="text" id="medida_complementaria" name="medida_complementaria" value="{{ $expediente->medida_complementaria }}" class="border rounded px-3 py-2 w-full">
        </div>
        <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Guardar
            </button>
        </div>
    </form>
</div>



@endsection
