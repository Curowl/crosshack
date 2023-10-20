<?php

namespace App\Filament\Resources\RecomendacionProductoResource\Pages;

use App\Filament\Resources\RecomendacionProductoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecomendacionProductos extends ListRecords
{
    protected static string $resource = RecomendacionProductoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
