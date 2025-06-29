<?php

namespace App\Filament\Resources\AboutScalesAcrossResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AboutScalesAcrossResource;

class ListAboutScalesAcrosses extends ListRecords
{
    protected static string $resource = AboutScalesAcrossResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'AboutPageSalesAcross')
                    ->where('section', 'AboutSectionSalesAcross')
                    ->doesntExist();
            })
        ];
    }
}
