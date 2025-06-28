<?php

namespace App\Filament\Resources\OnPageOptimizationResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\OnPageOptimizationResource;

class ListOnPageOptimizations extends ListRecords
{
    protected static string $resource = OnPageOptimizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'ServicePageOnPageOptimization')
                    ->where('section', 'ServiceSectionOnPageOptimization')
                    ->doesntExist();
            })
        ];
    }
}
