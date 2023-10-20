<?php

namespace App\Filament\Resources\RecursoIntaResource\Pages;

use App\Filament\Resources\RecursoIntaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecursoIntas extends ListRecords
{
    protected static string $resource = RecursoIntaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
