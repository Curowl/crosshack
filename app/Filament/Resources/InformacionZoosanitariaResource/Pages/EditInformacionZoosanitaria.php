<?php

namespace App\Filament\Resources\InformacionZoosanitariaResource\Pages;

use App\Filament\Resources\InformacionZoosanitariaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformacionZoosanitaria extends EditRecord
{
    protected static string $resource = InformacionZoosanitariaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
