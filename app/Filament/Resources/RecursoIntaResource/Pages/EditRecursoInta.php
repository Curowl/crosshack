<?php

namespace App\Filament\Resources\RecursoIntaResource\Pages;

use App\Filament\Resources\RecursoIntaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecursoInta extends EditRecord
{
    protected static string $resource = RecursoIntaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
