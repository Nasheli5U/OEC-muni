<?php

namespace App\Http\Controllers;

use App\Models\Resolucion;
use Illuminate\Http\Request;

class ResolucionController extends Controller
{
    public function index()
    {
        $resoluciones = Resolucion::all();
        return response()->json($resoluciones);
    }

    public function store(Request $request)
    {
        $resolucion = Resolucion::create($request->all());
        return response()->json($resolucion, 201);
    }

    public function show($id)
    {
        $resolucion = Resolucion::find($id);
        return response()->json($resolucion);
    }

    public function update(Request $request, $id)
    {
        $resolucion = Resolucion::findOrFail($id);
        $resolucion->update($request->all());
        return response()->json($resolucion, 200);
    }

    public function destroy($id)
    {
        Resolucion::destroy($id);
        return response()->json(null, 204);
    }
}

