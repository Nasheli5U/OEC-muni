<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use App\Models\Estado;
use Illuminate\Http\Request;

class ExpedienteController extends Controller
{
    // Mostrar listado de expedientes
    public function index()
    {
        $expedientes = Expediente::all(); // Esto debería devolver una colección de expedientes con sus respectivos IDs
        return view('expedientes.index', compact('expedientes')); 
    }

    
    public function resoluciones()
    {
        // Lógica para mostrar resoluciones
        return view('expedientes.resoluciones');
    }

    // Ruta adicional para reportes
    public function reportes()
    {
        // Lógica para generar reportes
        return view('expedientes.reportes');
    }

    // Mostrar formulario para editar estado de expediente
   
    // Actualizar estado de expediente
    public function updateEstado(Request $request, $id)
    {
        $validatedData = $request->validate([
            'estado' => 'required|string|max:255',
            'fecha_notificacion' => 'required|date',
        ]);

        $expediente = Expediente::findOrFail($id);
        $estado = new Estado([
            'estado' => $validatedData['estado'],
            'fecha_notificacion' => $validatedData['fecha_notificacion'],
        ]);
        $expediente->estados()->save($estado);

        return redirect()->route('expedientes.index')->with('success', 'Estado actualizado correctamente.');
    }

    // Mostrar formulario para editar datos de expediente
    public function edit(Expediente $expediente)
    {
        return view('expedientes.edit', compact('expediente'));
    }

    public function destroy(Expediente $expediente)
    {
        $expediente->delete();
        return redirect()->route('expedientes.index');
    }

    public function editEstado(Expediente $expediente)
    {
        return view('expedientes.editEstado', compact('expediente'));
    }

    public function actualizarEstado(Request $request, Expediente $expediente)
    {
        $expediente->estado = $request->estado;
        $expediente->fecha_notificacion = $request->fecha_notificacion;
        $expediente->save();

        return redirect()->route('expedientes.index');
    }

    // Actualizar datos de expediente
    public function updateDatos(Request $request, $id)
    {
        $validatedData = $request->validate([
            'apellidos' => 'required|string|max:255',
            'nombres' => 'required|string|max:255',
            'dni_ruc' => 'required|string|max:255',
            'direccion_predio' => 'required|string|max:255',
            'domicilio' => 'required|string|max:255',
            'procedencia' => 'required|string|max:255',
            'fecha' => 'required|date',
            'infraccion' => 'required|string|max:255',
            'monto' => 'required|numeric',
            'resolucion' => 'nullable|string|max:255',
            'medida_complementaria' => 'nullable|string|max:255',
        ]);

        $expediente = Expediente::findOrFail($id);
        $expediente->update($validatedData);

        return redirect()->route('expedientes.index')->with('success', 'Datos actualizados correctamente.');
    }

    // Mostrar detalles de un expediente específico
    public function show($id)
    {
        $expediente = Expediente::findOrFail($id);
        return view('expedientes.show', compact('expediente'));
    }

    // Métodos para editar y eliminar ya están correctamente nombrados según las convenciones de Route::resource

    // Eliminar un expediente
    

}

