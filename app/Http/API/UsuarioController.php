<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class usuarioController extends Controller
{
    public function index()
    {
        $Usuario = Usuario::all();

        $data = [
            'Usuario' => $Usuario,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:usuarios',
            'password' => 'required|min:8',
            'tipo' => 'required|in:admin,user'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $usuarios = usuarios::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'tipo' => $request->tipo
        ]);

        if (!$usuarios) {
            $data = [
                'message' => 'Error al crear el usuario',
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'usuarios' => $usuarios,
            'status' => 201
        ];

        return response()->json($data, 201);
    }

    public function show($id)
    {
        $usuarios = usuarios::find($id);

        if (!$usuarios) {
            $data = [
                'message' => 'Usuario no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $data = [
            'usuarios' => $usuarios,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        $usuarios = usuarios::find($id);

        if (!$usuarios) {
            $data = [
                'message' => 'Usuario no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        
        $usuarios->delete();

        $data = [
            'message' => 'Usuario eliminado',
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function update(Request $request, $id)
    {
        $usuarios = usuarios::find($id);

        if (!$usuarios) {
            $data = [
                'message' => 'Usuario no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:usuarios,email,' . $id,
            'password' => 'required|min:6',
            'tipo' => 'required|in:admin,user'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $usuarios->email = $request->email;
        $usuarios->password = bcrypt($request->password);
        $usuarios->tipo = $request->tipo;

        $usuarios->save();

        $data = [
            'message' => 'Usuario actualizado',
            'usuarios' => $usuarios,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function updatePartial(Request $request, $id)
    {
        $usuarios = usuarios::find($id);

        if (!$usuarios) {
            $data = [
                'message' => 'Usuario no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $validator = Validator::make($request->all(), [
            'email' => 'email|unique:usuarios,email,' . $id,
            'password' => 'min:8',
            'tipo' => 'in:admin,usuarios'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        if ($request->has('email')) {
            $usuarios->email = $request->email;
        }

        if ($request->has('password')) {
            $usuarios->password = bcrypt($request->password);
        }

        if ($request->has('tipo')) {
            $usuarios->tipo = $request->tipo;
        }

        $usuarios->save();

        $data = [
            'message' => 'Usuario actualizado',
            'usuarios' => $usuarios,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
}