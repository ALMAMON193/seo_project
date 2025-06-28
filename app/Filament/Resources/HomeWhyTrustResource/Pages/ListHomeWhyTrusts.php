<?php

namespace App\Filament\Resources\HomeWhyTrustResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\HomeWhyTrustResource;

class ListHomeWhyTrusts extends ListRecords
{
    protected static string $resource = HomeWhyTrustResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                // Hide the Create button if a record exists
                return CMS::where('page', 'HomePageWhyTrustWithUs')
                    ->where('section', 'HomeSectionWhyTrustWithUs')
                    ->doesntExist();
            }),
        ];
    }
}
