<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActualizacionNoticiaResource\Pages;
use App\Filament\Resources\ActualizacionNoticiaResource\RelationManagers;
use App\Models\ActualizacionNoticia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActualizacionNoticiaResource extends Resource
{
    protected static ?string $model = ActualizacionNoticia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListActualizacionNoticias::route('/'),
            'create' => Pages\CreateActualizacionNoticia::route('/create'),
            'edit' => Pages\EditActualizacionNoticia::route('/{record}/edit'),
        ];
    }    
}
