<?php

namespace App\Filament\Resources\HomeAboutUSResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\HomeAboutUSResource;

class ListHomeAboutUS extends ListRecords
{
    protected static string $resource = HomeAboutUSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                // Hide the Create button if a record exists
                return CMS::where('page', 'HomePageAboutUS')
                    ->where('section', 'HomeSectionAboutUS')
                    ->doesntExist();
            })
        ];
    }
}
