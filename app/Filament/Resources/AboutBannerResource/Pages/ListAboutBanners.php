<?php

namespace App\Filament\Resources\AboutBannerResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AboutBannerResource;

class ListAboutBanners extends ListRecords
{
    protected static string $resource = AboutBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'AboutPageBanner')
                    ->where('section', 'AboutSectionBanner')
                    ->doesntExist();
            })
        ];
    }
}
