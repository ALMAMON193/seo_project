<?php

namespace App\Filament\Resources\ECommerceResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ECommerceResource;

class ListECommerces extends ListRecords
{
    protected static string $resource = ECommerceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'ServicePageECommerceSeo')
                    ->where('section', 'ServiceSectionECommerceSeo')
                    ->doesntExist();
            })
        ];
    }
}
