<?php

namespace App\Filament\Resources\DataAnalysisResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\DataAnalysisResource;

class ListDataAnalyses extends ListRecords
{
    protected static string $resource = DataAnalysisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->visible(function () {
                    return CMS::where('page', 'ServicePageDataAnalysisSeo')
                        ->where('section', 'ServiceSectionDataAnalysisSeo')
                        ->doesntExist();
                }),
        ];
    }
}
