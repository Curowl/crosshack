<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformacionZoosanitariaResource\Pages;
use App\Filament\Resources\InformacionZoosanitariaResource\RelationManagers;
use App\Models\InformacionZoosanitaria;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class InformacionZoosanitariaResource extends Resource
{
    protected static ?string $model = InformacionZoosanitaria::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    protected static ?string $recordTitleAttribute = 'titulo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('categoria')
                    ->options([
                        'Vacunas' => 'Vacunas',
                        'Veterinario' => 'veterinario',
                        'Aseo' => 'Aseo',
                    ]),
                    
                    TextInput::make('titulo'),
                    RichEditor::make('descripcion'),
                    FileUpload::make('imagen') 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('titulo')->searchable()->sortable(),
                TextColumn::make('descripcion')->searchable()->sortable(),
                TextColumn::make('categoria')->searchable()->sortable(),
                ImageColumn::make('imagen')->circular()->searchable()->sortable(),

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

    public static function getNavigationLabel(): string
    {
        return 'Informacion Zoosanitaria';
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInformacionZoosanitarias::route('/'),
            'create' => Pages\CreateInformacionZoosanitaria::route('/create'),
            'edit' => Pages\EditInformacionZoosanitaria::route('/{record}/edit'),
        ];
    }    
}
