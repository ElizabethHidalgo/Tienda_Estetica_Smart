<?php

namespace App\Filament\Resources\Widgets;

use App\Models\Usuario;
use App\Models\Producto;
use App\Models\Categoria;



use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class sta1t extends BaseWidget
{
    protected function getStats(): array
    {
        $totalProducto = Producto::sum('precio');
        
        $totalClientes = Usuario::where('tipo', 'like', '%cliente%')->count(); 
        $totaladministradores = Usuario::where('tipo', 'like', '%admin%')->count(); 
        $totalCategorias = Categoria::count(); 
        $totalCantidades = Producto::count(); 
        
        return [
            Stat::make('Total de Clientes', number_format($totalClientes)),
            Stat::make('Total de Administradores', number_format($totaladministradores)),
            Stat::make('Total de Producto', "$" . number_format($totalProducto, 2)),
            Stat::make('Total de Categorías', number_format($totalCategorias)), 
            Stat::make('Total de Cantidad de productos', number_format($totalCantidades)),
            
        ];
    }
}
