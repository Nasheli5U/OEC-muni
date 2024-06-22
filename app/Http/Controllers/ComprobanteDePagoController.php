<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use Illuminate\Http\Request;

class ExpedienteController extends Controller
{
    // Muestra una lista de expedientes
    public function index()
    {
        $expedientes = Expediente::all();
        return view('expedientes.index', compact('expedientes'));
    }

    // Muestra el formulario para crear un nuevo expediente
    public function create()
    {
        $lastExpediente = Expediente::latest()->first();
        $nextNumber = $lastExpediente ? ($lastExpediente->id + 1) : 1;
        $expedienteNumero = str_pad($nextNumber, 3, '0', STR_PAD_LEFT) . '-' . date('Y');

        return view('expedientes.create', compact('expedienteNumero'));
    }

    // Almacena un nuevo expediente
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'apellidos' => 'required|string|max:255',
            'nombres' => 'required|string|max:255',
            'nExpediente' => 'required|integer',
            'fechaNot' => 'required|date',
            'estado' => 'required|string|max:255',
            'comprobante' => 'nullable|string',
            'imagen' => 'nullable|string',
            'precio' => 'required|numeric',
        ]);

        $expediente = Expediente::create($validatedData);
        return redirect()->route('expedientes.index')->with('success', 'Expediente creado correctamente.');
    }

    // Muestra un expediente específico
    public function show($id)
    {
        $expediente = Expediente::findOrFail($id);
        return view('expedientes.show', compact('expediente'));
    }

    // Muestra el formulario para editar un expediente
    public function edit($id)
    {
        $expediente = Expediente::findOrFail($id);
        return view('expedientes.edit', compact('expediente'));
    }

    // Actualiza un expediente
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'apellidos' => 'required|string|max:255',
            'nombres' => 'required|string|max:255',
            'nExpediente' => 'required|integer',
            'fechaNot' => 'required|date',
            'estado' => 'required|string|max:255',
            'comprobante' => 'nullable|string',
            'imagen' => 'nullable|string',
            'precio' => 'required|numeric',
        ]);

        $expediente = Expediente::findOrFail($id);
        $expediente->update($validatedData);
        return redirect()->route('expedientes.index')->with('success', 'Expediente actualizado correctamente.');
    }

    // Elimina un expediente
    public function destroy($id)
    {
        Expediente::destroy($id);
        return redirect()->route('expedientes.index')->with('success', 'Expediente eliminado correctamente.');
    }
}
