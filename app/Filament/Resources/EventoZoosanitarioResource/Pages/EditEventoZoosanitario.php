<?php

namespace App\Filament\Resources\EventoZoosanitarioResource\Pages;

use App\Filament\Resources\EventoZoosanitarioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventoZoosanitario extends EditRecord
{
    protected static string $resource = EventoZoosanitarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
