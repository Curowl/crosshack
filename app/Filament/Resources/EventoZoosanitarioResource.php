<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventoZoosanitarioResource\Pages;
use App\Filament\Resources\EventoZoosanitarioResource\RelationManagers;
use App\Models\EventoZoosanitario;
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

use App\Models\User;

class EventoZoosanitarioResource extends Resource
{
    protected static ?string $model = EventoZoosanitario::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $recordTitleAttribute = 'tipo_evento';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                     Select::make('tipo_evento')
                    ->options([
                        'Vacunas' => 'Vacunas',
                        'Veterinario' => 'veterinario',
                        'Aseo' => 'Aseo',
                    ]),
                    Select::make('user_id')
                    ->label('Usuario')
                    ->options(User::all()->pluck('name', 'id'))
                    ->searchable(),
                    RichEditor::make('descripcion'),
                    TextInput::make('notas_adicionales'),
                    DatePicker::make('fecha_evento'),
                    FileUpload::make('imagen')  
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tipo_evento')->searchable()->sortable(),
                TextColumn::make('usuario.name')->searchable()->sortable(),
                TextColumn::make('descripcion')->searchable()->sortable(),
                TextColumn::make('notas_adicionales')->searchable()->sortable(),
                TextColumn::make('fecha_evento')->dateTime('d/m/y')->searchable()->sortable(),
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
        return 'Evento zoosanitario';
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEventoZoosanitarios::route('/'),
            'create' => Pages\CreateEventoZoosanitario::route('/create'),
            'edit' => Pages\EditEventoZoosanitario::route('/{record}/edit'),
        ];
    }    
}
