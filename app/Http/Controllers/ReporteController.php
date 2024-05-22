<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index()
    {
        $reportes = Reporte::all();
        return response()->json($reportes);
    }

    public function store(Request $request)
    {
        $reporte = Reporte::create($request->all());
        return response()->json($reporte, 201);
    }

    public function show($id)
    {
        $reporte = Reporte::find($id);
        return response()->json($reporte);
    }

    public function update(Request $request, $id)
    {
        $reporte = Reporte::findOrFail($id);
        $reporte->update($request->all());
        return response()->json($reporte, 200);
    }

    public function destroy($id)
    {
        Reporte::destroy($id);
        return response()->json(null, 204);
    }
}
