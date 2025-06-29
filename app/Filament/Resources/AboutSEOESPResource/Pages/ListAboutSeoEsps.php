<?php

namespace App\Filament\Resources\AboutSeoEspResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AboutSeoEspResource;

class ListAboutSeoEsps extends ListRecords
{
    protected static string $resource = AboutSeoEspResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'AboutPageSeoEsp')
                    ->where('section', 'AboutSectionSeoEsp')
                    ->doesntExist();
            })
        ];
    }
}
