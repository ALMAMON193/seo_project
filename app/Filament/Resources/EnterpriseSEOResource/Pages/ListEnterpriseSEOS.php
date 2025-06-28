<?php

namespace App\Filament\Resources\EnterpriseSEOResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\EnterpriseSEOResource;

class ListEnterpriseSEOS extends ListRecords
{
    protected static string $resource = EnterpriseSEOResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'ServicePageEnterpriseSeo')
                    ->where('section', 'ServiceSectionEnterpriseSeo')
                    ->doesntExist();
            })
        ];
    }
}
