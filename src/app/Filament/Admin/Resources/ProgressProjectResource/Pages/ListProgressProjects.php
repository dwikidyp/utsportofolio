<?php

namespace App\Filament\Admin\Resources\ProgressProjectResource\Pages;

use App\Filament\Admin\Resources\ProgressProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgressProjects extends ListRecords
{
    protected static string $resource = ProgressProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
