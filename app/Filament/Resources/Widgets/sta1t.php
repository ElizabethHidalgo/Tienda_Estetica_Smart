<?php

namespace App\Filament\Resources\Widgets;

use App\Models\Usuario;
use App\Models\Producto;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class sta1t extends BaseWidget
{
    protected function getStats(): array
    {
        $totalClientes = Usuario::count();
        $totalProducto = Producto::sum('precio');

        return[
            Stat::make('Total de Clientes', number_format($totalClientes)),
            Stat::make('Total de Producto', "$" . number_format($totalProducto, 2)),
        ];

    }
}