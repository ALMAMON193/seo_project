<?php

namespace App\Filament\Resources\TechnicalSEOResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\TechnicalSEOResource;

class ListTechnicalSEOS extends CreateRecord
{
    protected static string $resource = TechnicalSEOResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
