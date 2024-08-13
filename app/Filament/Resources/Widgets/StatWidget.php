<?php

namespace App\Filament\Resources\Widgets;

use App\Models\Producto;
use Filament\Widgets\ChartWidget;

class StatWidget extends ChartWidget
{
    protected static ?string $heading = 'Cantidad de Productos por Nombre';

    protected function getData(): array
    {
        // Obtener el conteo de productos por nombre
        $productos = Producto::selectRaw('nombre, COUNT(*) as count')
            ->groupBy('nombre')
            ->orderBy('count', 'desc')
            ->get();

        // Preparar los datos para el gráfico
        return [
            'datasets' => [
                [
                    'label' => 'Cantidad de Productos',
                    'data' => $productos->pluck('count')->toArray(),
                    'backgroundColor' => '#4A90E2',  // Color de las barras
                    'borderColor' => '#4A90E2',      // Color del borde de las barras (opcional)
                    'borderWidth' => 1,              // Ancho del borde de las barras (opcional)
                ],
            ],
            'labels' => $productos->pluck('nombre')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}

