<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecursoIntaResource\Pages;
use App\Filament\Resources\RecursoIntaResource\RelationManagers;
use App\Models\RecursoInta;
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

class RecursoIntaResource extends Resource
{
    protected static ?string $model = RecursoInta::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-down-on-square-stack';

    protected static ?string $recordTitleAttribute = 'nombre_recurso';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Select::make('tipo_recurso')
                    ->options([
                        'Informativo' => 'Infromativo',
                        'Educativo' => 'Educativo',
                
                    ]),
                  
                    TextInput::make('nombre_recurso'),
                    RichEditor::make('descripcion'),
                    TextInput::make('enlace'),
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre_recurso')->searchable()->sortable(),
                TextColumn::make('tipo_recurso')->searchable()->sortable(),
                TextColumn::make('descripcion')->searchable()->sortable(),
                TextColumn::make('enlace')->searchable()->sortable(),
            
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
        return 'Recursos Inta';
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRecursoIntas::route('/'),
            'create' => Pages\CreateRecursoInta::route('/create'),
            'edit' => Pages\EditRecursoInta::route('/{record}/edit'),
        ];
    }    
}
