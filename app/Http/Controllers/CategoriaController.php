<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CategoriaController extends Controller
{
    public function index()
    {
        // Obtener todas las categorías
        $categorias = Categoria::all();

        // Pasar las categorías a la vista
        return view('categorias', ['categorias' => $categorias]);
    }

    public function generatePdf()
    {
        // Obtener todas las categorías
        $categorias = Categoria::all();

        // Cargar la vista para el PDF
        $pdf = Pdf::loadView('categorias_pdf', ['categorias' => $categorias]);

        // Descargar el PDF
        return $pdf->download('categorias.pdf');
    }
}
