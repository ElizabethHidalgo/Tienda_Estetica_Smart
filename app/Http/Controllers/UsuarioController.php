<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class UsuarioController extends Controller
{
    public function index()
    {
        // Obtener todas las categorías
        $usuarios = Usuario::all();

        // Pasar las categorías a la vista
        return view('usuarios', ['usuarios' => $usuarios]);
    }

    public function generatePdf()
    {
        // Obtener todas las categorías
        $usuarios = Usuario::all();

        // Cargar la vista para el PDF
        $pdf = Pdf::loadView('usuarios_pdf', ['usuarios' => $usuarios]);

        // Descargar el PDF
        return $pdf->download('usuarios.pdf');
    }
}
