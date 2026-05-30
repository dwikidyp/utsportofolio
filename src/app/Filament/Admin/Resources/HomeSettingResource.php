<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\HomeSettingResource\Pages;
use App\Models\HomeSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HomeSettingResource extends Resource
{
    protected static ?string $model = HomeSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Data Management';
    protected static ?int $navigationSort = 1;
    protected static ?string $label = 'Home';
    protected static ?string $pluralLabel = 'Home';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Section::make('Hero')->schema([
                TextInput::make('hero_label'),
                TextInput::make('hero_title')->required(),
                Textarea::make('hero_description'),
            ]),

            Section::make('Button')->schema([
                TextInput::make('button_project_text'),
                TextInput::make('button_project_link'),

                TextInput::make('button_contact_text'),
                TextInput::make('button_contact_link'),
            ]),

            Section::make('About')->schema([
                RichEditor::make('about_description'),
                TagsInput::make('skills'),
            ]),

            Section::make('CTA')->schema([
                TextInput::make('cta_sub'),
                Textarea::make('cta_title'),
            ]),
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
            'index' => Pages\ListHomeSettings::route('/'),
            'create' => Pages\CreateHomeSetting::route('/create'),
            'edit' => Pages\EditHomeSetting::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return ! static::getModel()::exists();
    }
}
