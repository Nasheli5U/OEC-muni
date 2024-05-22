<?php

namespace App\Http\Controllers;

use App\Models\ComprobanteDePago;
use Illuminate\Http\Request;

class ComprobanteDePagoController extends Controller
{
    public function index()
    {
        $comprobantes = ComprobanteDePago::all();
        return response()->json($comprobantes);
    }

    public function store(Request $request)
    {
        $comprobante = ComprobanteDePago::create($request->all());
        return response()->json($comprobante, 201);
    }

    public function show($id)
    {
        $comprobante = ComprobanteDePago::find($id);
        return response()->json($comprobante);
    }

    public function update(Request $request, $id)
    {
        $comprobante = ComprobanteDePago::findOrFail($id);
        $comprobante->update($request->all());
        return response()->json($comprobante, 200);
    }

    public function destroy($id)
    {
        ComprobanteDePago::destroy($id);
        return response()->json(null, 204);
    }
}
