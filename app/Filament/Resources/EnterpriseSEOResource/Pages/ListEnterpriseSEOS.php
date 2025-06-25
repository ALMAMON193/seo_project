<?php

namespace App\Filament\Resources\EnterpriseSEOResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\EnterpriseSEOResource;

class ListEnterpriseSEOS extends CreateRecord
{
    protected static string $resource = EnterpriseSEOResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
