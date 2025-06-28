<?php

namespace App\Filament\Resources\KeywordResearchResource\Pages;

use App\Models\CMS;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\KeywordResearchResource;

class ListKeywordResearch extends ListRecords
{
    protected static string $resource = KeywordResearchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->visible(function () {
                return CMS::where('page', 'ServicePageKeywordResearch')
                    ->where('section', 'ServiceSectionKeywordResearch')
                    ->doesntExist();
            })
        ];
    }
}
