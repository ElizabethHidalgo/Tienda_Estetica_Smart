<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        // Obtener todas las categorías
        $categorias = Categoria::all();

        // Filtrar productos por categoría si se pasa un parámetro 'categoria'
        $productos = Producto::when($request->has('categoria'), function ($query) use ($request) {
            return $query->where('categoria_id', $request->input('categoria'));
        })->paginate(6);

        return view('productos', [
            'productos' => $productos,
            'categorias' => $categorias
        ]);
    }
}
