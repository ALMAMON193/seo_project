<?php

namespace App\Filament\Resources;

use App\Models\CMS;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AboutSEOESPApartResource\Pages;


class AboutSEOESPApartResource extends Resource
{
    protected static ?string $model = CMS::class;
    protected static ?string $navigationGroup = 'About Sections';

    protected static ?string $label = 'About SEO ESP Apart';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(12)
                    ->schema([
                        Section::make('Content Details')
                            ->schema([
                                RichEditor::make('content')
                                    ->columnSpanFull(),
                            ])
                            ->columnSpan(8),

                        Section::make('Page & Section Settings')
                            ->schema([
                                TextInput::make('page')
                                    ->default('AboutPageEspApart')
                                    ->disabled()
                                    ->dehydrated(true),
                                TextInput::make('section')
                                    ->default('AboutSectionEspApart')
                                    ->disabled()
                                    ->dehydrated(true),
                            ])
                            ->columnSpan(4),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                return $query->aboutEspApart();
            })
            ->columns([

                Tables\Columns\TextColumn::make('content')
                    ->label('Content')
                    ->sortable()
                    ->limit(145)
                    ->searchable()
                    ->formatStateUsing(fn(?string $state): string => strip_tags($state ?? '')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutSEOESPAparts::route('/'),
            'create' => Pages\CreateAboutSEOESPApart::route('/create'),
            'edit' => Pages\EditAboutSEOESPApart::route('/{record}/edit'),
        ];
    }
}
