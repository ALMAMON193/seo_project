<?php

namespace App\Filament\Resources\TechnicalSEOResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\TechnicalSEOResource;

class ListTechnicalSEOS extends ListRecords
{
    protected static string $resource = TechnicalSEOResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'ServicePageTechnicalSeo')
                    ->where('section', 'ServiceSectionTechnicalSeo')
                    ->doesntExist();
            })

        ];
    }
}
