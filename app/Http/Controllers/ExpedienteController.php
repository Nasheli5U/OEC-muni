<?php

namespace App\Http\Controllers;

use App\Models\Expediente;
use Illuminate\Http\Request;

class ExpedienteController extends Controller
{
    public function index()
    {
        $expedientes = Expediente::all();
        return response()->json($expedientes);
    }

    public function store(Request $request)
    {
        $expediente = Expediente::create($request->all());
        return response()->json($expediente, 201);
    }

    public function show($id)
    {
        $expediente = Expediente::find($id);
        return response()->json($expediente);
    }

    public function update(Request $request, $id)
    {
        $expediente = Expediente::findOrFail($id);
        $expediente->update($request->all());
        return response()->json($expediente, 200);
    }

    public function destroy($id)
    {
        Expediente::destroy($id);
        return response()->json(null, 204);
    }
}

