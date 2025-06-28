<?php

namespace App\Filament\Resources\LocalSEOResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\LocalSEOResource;

class ListLocalSEOS extends ListRecords
{
    protected static string $resource = LocalSEOResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'ServicePageLocalSeo')
                    ->where('section', 'ServiceSectionLocalSeo')
                    ->doesntExist();
            })
        ];
    }
}
