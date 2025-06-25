<?php

namespace App\Filament\Resources\ServiceBannerSectionResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ServiceBannerSectionResource;

class ListServiceBannerSections extends CreateRecord
{
    protected static string $resource = ServiceBannerSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
