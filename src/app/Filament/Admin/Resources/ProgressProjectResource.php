<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProgressProjectResource\Pages;
use App\Models\ProgressProject;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProgressProjectResource extends Resource
{
    protected static ?string $model = ProgressProject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Data Management';
    protected static ?int $navigationSort = 3;
    protected static ?string $label = 'Progress Project';
    protected static ?string $pluralLabel = 'Progress Projects';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('technology')
                    ->required(),

                TextInput::make('title')
                    ->required(),

                Textarea::make('description')
                    ->required(),

                TextInput::make('year')
                    ->numeric(),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),

                FileUpload::make('image')
                    ->image()
                    ->directory('progress-projects'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('technology'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('year'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListProgressProjects::route('/'),
            'create' => Pages\CreateProgressProject::route('/create'),
            'edit' => Pages\EditProgressProject::route('/{record}/edit'),
        ];
    }
}
