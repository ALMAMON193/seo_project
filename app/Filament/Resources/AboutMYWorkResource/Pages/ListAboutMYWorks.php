<?php

namespace App\Filament\Resources\AboutMYWorkResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AboutMYWorkResource;

class ListAboutMYWorks extends ListRecords
{
    protected static string $resource = AboutMYWorkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'AboutPageMyWork')
                    ->where('section', 'AboutSectionMyWork')
                    ->doesntExist();
            })
        ];
    }
}
