<?php

namespace App\Filament\Resources\ServiceBannerSectionResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ServiceBannerSectionResource;

class ListServiceBannerSections extends ListRecords
{
    protected static string $resource = ServiceBannerSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'ServicePageBanner')
                    ->where('section', 'ServiceSectionBanner')
                    ->doesntExist();
            })
        ];
    }
}
