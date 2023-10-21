<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecomendacionProductoResource\Pages;
use App\Filament\Resources\RecomendacionProductoResource\RelationManagers;
use App\Models\RecomendacionProducto;
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

class RecomendacionProductoResource extends Resource
{
    protected static ?string $model = RecomendacionProducto::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';

    protected static ?string $recordTitleAttribute = 'nombre_producto';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Select::make('categoria')
                    ->options([
                        'Medicina' => 'Medicina',
                        'Alimentos' => 'Alimentos',
                        
                    ]),
                    TextInput::make('nombre_producto'),
                    RichEditor::make('descripcion'),
                    FileUpload::make('imagen') 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('categoria')->searchable()->sortable(),
                TextColumn::make('nombre_producto')->searchable()->sortable(),
                TextColumn::make('descripcion')->searchable()->sortable(),
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
        return 'Recomendacion de productos';
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRecomendacionProductos::route('/'),
            'create' => Pages\CreateRecomendacionProducto::route('/create'),
            'edit' => Pages\EditRecomendacionProducto::route('/{record}/edit'),
        ];
    }    
}
