<?php

namespace App\Filament\Resources\ScalableSEOSolutionResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ScalableSEOSolutionResource;

class ListScalableSEOSolutions extends ListRecords
{
    protected static string $resource = ScalableSEOSolutionResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'ServicePageScalableSeo')
                    ->where('section', 'ServiceSectionScalableSeo')
                    ->doesntExist();
            })
        ];
    }
}
