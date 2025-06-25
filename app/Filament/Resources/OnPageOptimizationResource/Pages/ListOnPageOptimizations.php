<?php

namespace App\Filament\Resources\OnPageOptimizationResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\OnPageOptimizationResource;

class ListOnPageOptimizations extends CreateRecord
{
    protected static string $resource = OnPageOptimizationResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
