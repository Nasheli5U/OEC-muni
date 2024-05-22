<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = Estado::all();
        return response()->json($estados);
    }

    public function store(Request $request)
    {
        $estado = Estado::create($request->all());
        return response()->json($estado, 201);
    }

    public function show($id)
    {
        $estado = Estado::find($id);
        return response()->json($estado);
    }

    public function update(Request $request, $id)
    {
        $estado = Estado::findOrFail($id);
        $estado->update($request->all());
        return response()->json($estado, 200);
    }

    public function destroy($id)
    {
        Estado::destroy($id);
        return response()->json(null, 204);
    }
}
