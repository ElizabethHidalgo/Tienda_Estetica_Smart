<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        $data = [
            'categorias' => $categorias,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|unique:categorias|max:255',
            'descripcion' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $categoria = Categoria::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
        ]);

        if (!$categoria) {
            $data = [
                'message' => 'Error al crear la categoría',
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'categoria' => $categoria,
            'status' => 201
        ];

        return response()->json($data, 201);
    }

    public function show($id)
    {
        $categoria = Categoria::find($id);

        if (!$categoria) {
            $data = [
                'message' => 'Categoría no encontrada',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $data = [
            'categoria' => $categoria,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);

        if (!$categoria) {
            $data = [
                'message' => 'Categoría no encontrada',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        
        $categoria->delete();

        $data = [
            'message' => 'Categoría eliminada',
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);

        if (!$categoria) {
            $data = [
                'message' => 'Categoría no encontrada',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|unique:categorias,nombre,' . $id . '|max:255',
            'descripcion' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();

        $data = [
            'message' => 'Categoría actualizada',
            'categoria' => $categoria,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function updatePartial(Request $request, $id)
    {
        $categoria = Categoria::find($id);

        if (!$categoria) {
            $data = [
                'message' => 'Categoría no encontrada',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $validator = Validator::make($request->all(), [
            'nombre' => 'unique:categorias,nombre,' . $id . '|max:255',
            'descripcion' => 'max:255'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        if ($request->has('nombre')) {
            $categoria->nombre = $request->nombre;
        }

        if ($request->has('descripcion')) {
            $categoria->descripcion = $request->descripcion;
        }

        $categoria->save();

        $data = [
            'message' => 'Categoría actualizada',
            'categoria' => $categoria,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
}