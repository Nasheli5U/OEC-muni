@extends('layouts.app')

@section('content')

<div class="p-4 sm:ml-64">
  <div class="flex flex-col items-center gap-4">
    <h2 class="text-xl font-bold">REPORTES</h2>
    <div class="flex flex-col gap-2">
      <div class="flex items-center gap-4">
        <div>
          <p class="font-medium">POR FECHA</p>
          <div class="flex flex-col gap-2">
            <div class="flex items-center gap-2">
              <label for="fecha-desde" class="text-gray-700">Desde</label>
              <input type="date" id="fecha-desde" value="2024-12-12" class="border border-gray-300 px-3 py-2 rounded-md focus:ring-blue-500 focus:border-blue-500"/>
            </div>
            <div class="flex items-center gap-2">
              <label for="fecha-hasta" class="text-gray-700">Hasta</label>
              <input type="date" id="fecha-hasta" value="2024-12-12" class="border border-gray-300 px-3 py-2 rounded-md focus:ring-blue-500 focus:border-blue-500"/>
            </div>
          </div>
        </div>
        <div>
          <p class="font-medium">POR PROCEDENCIA</p>
          <select class="border border-gray-300 px-3 py-2 rounded-md focus:ring-blue-500 focus:border-blue-500">
            <option value="">Selecciona una opción</option>
            <option value="opcion1">Opción 1</option>
            <option value="opcion2">Opción 2</option>
            <option value="opcion3">Opción 3</option>
          </select>
        </div>
      </div>
      <div class="flex items-center gap-4">
        <div>
          <p class="font-medium">POR INFRACCION</p>
          <select class="border border-gray-300 px-3 py-2 rounded-md focus:ring-blue-500 focus:border-blue-500">
            <option value="">Selecciona una opción</option>
            <option value="opcion1">Opción 1</option>
            <option value="opcion2">Opción 2</option>
            <option value="opcion3">Opción 3</option>
          </select>
        </div>
      </div>
      <div class="flex items-center gap-4">
        <div>
          <p class="font-medium">POR COMPROBANTES</p>
          <div class="flex flex-col gap-2">
            <div class="flex items-center gap-2">
              <label for="comprobante-desde" class="text-gray-700">Desde</label>
              <input type="date" id="comprobante-desde" value="2024-12-12" class="border border-gray-300 px-3 py-2 rounded-md focus:ring-blue-500 focus:border-blue-500"/>
            </div>
            <div class="flex items-center gap-2">
              <label for="comprobante-hasta" class="text-gray-700">Hasta</label>
              <input type="date" id="comprobante-hasta" value="2024-12-12" class="border border-gray-300 px-3 py-2 rounded-md focus:ring-blue-500 focus:border-blue-500"/>
            </div>
          </div>
        </div>
      </div>
      <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Generar reporte
      </button>
    </div>
  </div>
</div>

@endsection
