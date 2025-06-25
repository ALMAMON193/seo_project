<?php

namespace App\Filament\Resources\ECommerceResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ECommerceResource;

class ListECommerces extends CreateRecord
{
    protected static string $resource = ECommerceResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}
