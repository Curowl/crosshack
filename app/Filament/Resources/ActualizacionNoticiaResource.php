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

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;


class ActualizacionNoticiaResource extends Resource
{
    protected static ?string $model = ActualizacionNoticia::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $recordTitleAttribute = 'titulo';

    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    TextInput::make('titulo'),
                    RichEditor::make('contenido'),
                    DatePicker::make('fecha_publicacion'),
                    FileUpload::make('imagen')  
                    
                    ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('titulo')->searchable()->sortable(),
                TextColumn::make('fecha_publicacion')->searchable()->sortable()
                ->dateTime('d/m/y'),
                ImageColumn::make('imagen')->circular()->searchable()->sortable()
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
    return 'Actualizacion de noticias';
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
