<?php

namespace App\Filament\Resources\BibliotecaIntaResource\Pages;

use App\Filament\Resources\BibliotecaIntaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBibliotecaInta extends EditRecord
{
    protected static string $resource = BibliotecaIntaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
