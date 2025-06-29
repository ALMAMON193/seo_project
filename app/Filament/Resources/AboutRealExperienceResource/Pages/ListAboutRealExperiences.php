<?php

namespace App\Filament\Resources\AboutRealExperienceResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AboutRealExperienceResource;

class ListAboutRealExperiences extends ListRecords
{
    protected static string $resource = AboutRealExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'AboutPageRealExperience')
                    ->where('section', 'AboutSectionRealExperience')
                    ->doesntExist();
            })
        ];
    }
}
