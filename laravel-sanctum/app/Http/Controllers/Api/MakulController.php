<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function index()
    {
        return response()->json(Makul::all());
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama_makul' => 'required|string|max:255',
            'id_makul' => 'required|unique:makuls|max:10',
            'semester' => 'required|max:2',
        ]);

        $makul = Makul::create($validatedData);
        return response()->json(['message' => 'Makul created successfully', 'data' => $makul], 201);
    }

    public function read($id)
    {
        $makul = Makul::find($id);
        if (!$makul) {
            return response()->json(['message' => 'Makul not found'], 404);
        }
        return response()->json($makul);
    }

    public function all()
    {
        $makul = Makul::all();
        if (!$makul) {
            return response()->json(['message' => 'Makul not found'], 404);
        }
        return response()->json($makul);
    }

    public function update(Request $request, $id)
    {
        $makul = Makul::find($id);
        if (!$makul) {
            return response()->json(['message' => 'Makul not found'], 404);
        }

        $validatedData = $request->validate([
            'nama_makul' => 'sometime|string|max:255',
            'id_makul' => 'sometime|unique:makuls|max:10' . $id,
            'semester' => 'sometime|max:2',
        ]);

        $makul->update($validatedData);
        return response()->json(['message' => 'Makul updated successfully', 'data' => $makul]);
    }

    public function delete($id)
    {
        $makul = Makul::find($id);
        if (!$makul) {
            return response()->json(['message' => 'Makul not found'], 404);
        }

        $makul->delete();
        return response()->json(['message' => 'Makul deleted successfully']);
    }
}
