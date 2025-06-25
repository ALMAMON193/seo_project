<?php

namespace App\Filament\Resources\ScalableSEOSolutionResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ScalableSEOSolutionResource;

class ListScalableSEOSolutions extends CreateRecord
{
    protected static string $resource = ScalableSEOSolutionResource::class;


    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
