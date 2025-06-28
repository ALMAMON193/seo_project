<?php

namespace App\Filament\Resources\HomeBannerResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\HomeBannerResource;

class ListHomeBanners extends ListRecords
{
    protected static string $resource = HomeBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->visible(function () {
                    // Hide the Create button if a record exists
                    return CMS::where('page', 'HomePageBanner')
                        ->where('section', 'HomeSectionBanner')
                        ->doesntExist();
                }),
        ];
    }
}
