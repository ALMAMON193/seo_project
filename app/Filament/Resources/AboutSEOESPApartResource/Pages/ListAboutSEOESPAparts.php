<?php

namespace App\Filament\Resources\AboutSEOESPApartResource\Pages;

use App\Filament\Resources\AboutSEOESPApartResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutSEOESPAparts extends ListRecords
{
    protected static string $resource = AboutSEOESPApartResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
