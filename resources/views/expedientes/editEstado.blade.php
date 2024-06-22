@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Editar Estado de Expediente</h1>
    <div class="bg-white rounded-lg shadow-md p-6">
        <form action="{{ route('expedientes.actualizarEstado', $expediente->id) }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-1">
                    <label for="dniRuc" class="block text-gray-700 text-sm font-bold mb-2">DNI / RUC</label>
                    <input type="text" id="dniRuc" value="{{ $expediente->dni_ruc }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>
                </div>
                <div class="col-span-1">
                    <label for="numeroExpediente" class="block text-gray-700 text-sm font-bold mb-2">N° Exp.</label>
                    <input type="text" id="numeroExpediente" value="{{ $expediente->numero_expediente }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div class="col-span-1">
                    <label for="monto" class="block text-gray-700 text-sm font-bold mb-2">Monto</label>
                    <input type="text" id="monto" value="{{ $expediente->monto }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>
                </div>
                <div class="col-span-1">
                    <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado</label>
                    <select id="estado" name="estado" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="R.E.C." @if($expediente->estado == 'R.E.C.') selected @endif>R.E.C.</option>
                        <option value="R.E.E.F." @if($expediente->estado == 'R.E.E.F.') selected @endif>R.E.E.F.</option>
                        <option value="R.C." @if($expediente->estado == 'R.C.') selected @endif>R.C.</option>
                        <option value="R.S.E.C." @if($expediente->estado == 'R.S.E.C.') selected @endif>R.S.E.C.</option>
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <label for="fechaNotificacion" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Notificación</label>
                <input type="date" id="fechaNotificacion" name="fecha_notificacion" value="{{ old('fecha_notificacion', $expediente->fecha_notificacion) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mt-6 flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus-shadow-outline">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
