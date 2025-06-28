<?php

namespace App\Filament\Resources\ContentSEOResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ContentSEOResource;

class ListContentSEO extends ListRecords
{
    protected static string $resource = ContentSEOResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'ServicePageContentSeo')
                    ->where('section', 'ServiceSectionContentSeo')
                    ->doesntExist();
            }),

        ];
    }
}
