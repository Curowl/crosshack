<?php

namespace App\Filament\Resources\RecomendacionProductoResource\Pages;

use App\Filament\Resources\RecomendacionProductoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecomendacionProducto extends EditRecord
{
    protected static string $resource = RecomendacionProductoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
