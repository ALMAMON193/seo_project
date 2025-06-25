<?php

namespace App\Filament\Resources\DataAnalysisResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\DataAnalysisResource;

class ListDataAnalyses extends CreateRecord
{
    protected static string $resource = DataAnalysisResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
