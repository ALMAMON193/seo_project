<?php

namespace App\Filament\Resources\AboutMYWorkItemResource\Pages;

use App\Filament\Resources\AboutMYWorkItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutMYWorkItems extends ListRecords
{
    protected static string $resource = AboutMYWorkItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
