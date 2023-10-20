<?php

namespace App\Filament\Resources\ActualizacionNoticiaResource\Pages;

use App\Filament\Resources\ActualizacionNoticiaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActualizacionNoticias extends ListRecords
{
    protected static string $resource = ActualizacionNoticiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
