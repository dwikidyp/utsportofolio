<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Data Management';
    protected static ?int $navigationSort = 2;
    protected static ?string $label = 'Project';
    protected static ?string $pluralLabel = 'Projects';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Project')->schema([
                    TextInput::make('title')->required(),
                    Textarea::make('description')->required(),

                    FileUpload::make('image')
                        ->image()
                        ->directory('projects'),

                    Select::make('category')
                        ->options([
                            'uiux' => 'UI/UX Design',
                            'branding' => 'Branding',
                            'webdev' => 'Web Development',
                            'mobiledev' => 'Mobile Development',
                        ])
                        ->required(),

                    TextInput::make('client'),
                    TextInput::make('project_url'),

                    TagsInput::make('tech_stack'),

                    Toggle::make('is_featured'),

                    TextInput::make('sort_order')
                        ->numeric()
                        ->default(0),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\IconColumn::make('is_featured')->boolean(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
