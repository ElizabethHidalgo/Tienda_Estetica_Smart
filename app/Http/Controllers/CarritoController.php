<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\CarritoItem;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function agregarAlCarrito(Request $request)
    {
        $productoId = $request->input('producto_id');
        $cantidad = $request->input('quantity');
        $userId = auth()->id();

        // Obtener o crear el carrito para el usuario
        $carrito = Carrito::firstOrCreate(['user_id' => $userId]);

        // Agregar el item al carrito
        $item = CarritoItem::updateOrCreate(
            ['carrito_id' => $carrito->id, 'producto_id' => $productoId],
            ['cantidad' => $cantidad]
        );

        return redirect()->back()->with('success', 'Producto agregado al carrito con éxito!');
    }

    public function eliminarDelCarrito(Request $request)
    {
        $itemId = $request->input('item_id');

        // Eliminar el item del carrito
        CarritoItem::destroy($itemId);

        return redirect()->back()->with('success', 'Producto eliminado del carrito con éxito!');
    }

    public function pagarCarrito(Request $request)
    {
        $itemId = $request->input('item_id');

        // Lógica de pago
        // Aquí deberías integrar tu pasarela de pago y actualizar el estado del carrito

        return redirect()->back()->with('success', 'Pago realizado con éxito!');
    }

    public function mostrarCarrito()
    {
        $userId = auth()->id();
        $carrito = Carrito::where('user_id', $userId)->with('items.producto')->first();

        // Obtener todos los productos disponibles
        $productos = Producto::all();

        return view('carrito', compact('carrito', 'productos'));
    }
}
