@extends('layouts.app')

@section('content')

<div class="p-4 sm:ml-64">
  <div class="flex flex-col gap-4">
    <div class="text-center font-bold text-xl">ELABORACIÓN DE RESOLUCIONES</div>
    <div class="flex gap-4 items-center">
      <div>N° Exp.</div>
      <select class="rounded-md border border-gray-300 px-4 py-2">
        <option value="151-2024-OEC">151-2024-OEC</option>
      </select>
    </div>
    <div class="flex flex-col gap-4">
      <div class="flex items-center justify-between">
        <div class="font-bold">RESOLUCIÓN DE EJECUCIÓN COACTIVA</div>
        <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">Subir archivo</button>
      </div>
      <div class="flex items-center justify-between">
        <div class="font-bold">RESOLUCIÓN DE EMBARGO Y EJECUCIÓN FORZADA</div>
        <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">Subir archivo</button>
      </div>
      <div class="flex items-center justify-between">
        <div class="font-bold">RESOLUCIÓN COACTIVA</div>
        <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">Subir archivo</button>
      </div>
      <div class="flex items-center justify-between">
        <div class="font-bold">RESOLUCIÓN DE SUSPENSION DE PROCESO DE EJECUCIÓN COACTIVA</div>
        <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">Subir archivo</button>
      </div>
      <div class="flex items-center justify-between">
        <div class="font-bold">SUSTENTO</div>
        <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">Subir archivo</button>
      </div>
      <div class="flex items-center justify-between">
        <div class="font-bold">HOJA DE COORDINACION</div>
        <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">Subir archivo</button>
      </div>
      <div class="flex items-center justify-between">
        <div class="font-bold">INFORME</div>
        <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">Subir archivo</button>
      </div>
    </div>
  </div>
</div>

@endsection
