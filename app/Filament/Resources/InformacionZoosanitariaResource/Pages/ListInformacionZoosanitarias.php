<?php

namespace App\Filament\Resources\InformacionZoosanitariaResource\Pages;

use App\Filament\Resources\InformacionZoosanitariaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformacionZoosanitarias extends ListRecords
{
    protected static string $resource = InformacionZoosanitariaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
