<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BibliotecaIntaResource\Pages;
use App\Filament\Resources\BibliotecaIntaResource\RelationManagers;
use App\Models\BibliotecaInta;
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

class BibliotecaIntaResource extends Resource
{
    protected static ?string $model = BibliotecaInta::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-left-on-rectangle';

    protected static ?string $recordTitleAttribute = 'titulo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('titulo'),

                Select::make('categoria')
                    ->options([
                        'Nutricion' => 'Nutricion',
                        'salud' => 'salud',
                        'instrucciones' => 'instrucciones',
                    ]),
    
                    RichEditor::make('contenido'),
                    
                    FileUpload::make('imagen')
                    ->multiple()
                    ->downloadable()
                    ->label('Documento') ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('titulo')->searchable()->sortable(),
                TextColumn::make('categoria')->searchable()->sortable(),
                TextColumn::make('contenido')->searchable()->sortable(),
                
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
        return 'Biblioteca Inta';
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBibliotecaIntas::route('/'),
            'create' => Pages\CreateBibliotecaInta::route('/create'),
            'edit' => Pages\EditBibliotecaInta::route('/{record}/edit'),
        ];
    }    
}
