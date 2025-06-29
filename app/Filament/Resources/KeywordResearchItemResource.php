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
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KeywordResearchItemResource\Pages;


class KeywordResearchItemResource extends Resource
{
    protected static ?string $model = CMS::class;


    protected static ?string $navigationGroup = 'Keyword Research and Tracking';
    protected static ?string $navigationLabel = 'Keyword Research Items';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(12)
                    ->schema([
                        Section::make('Content Details')
                            ->schema([
                                TextInput::make('title')
                                    ->columnSpanFull()
                                    ->placeholder('For example: Keyword Research & Tracking'),
                                TextInput::make('sub_title')
                                    ->placeholder('Enter Sub Title')->columnSpanFull(),
                                FileUpload::make('image')
                                    ->label('Icon')
                                    ->disk('public')
                                    ->directory('keyword-research-items')
                                    ->image() // Restrict to images
                                    ->acceptedFileTypes(['image/*'])
                                    ->imagePreviewHeight('150')
                                    ->getUploadedFileNameForStorageUsing(function ($file) {
                                        Log::info('Uploaded file name: ' . $file->getClientOriginalName());
                                        return 'keyword-research-items/' . $file->getClientOriginalName();
                                    })
                                    ->columnSpanFull(),
                                TextInput::make('image_alt')
                                    ->placeholder('Enter Image Alt Text')->columnSpanFull(),
                            ])
                            ->columnSpan(8),

                        Section::make('Page & Section Settings')
                            ->schema([
                                TextInput::make('page')
                                    ->default('ServicePageKeywordResearchItem')
                                    ->disabled()
                                    ->dehydrated(true),
                                TextInput::make('section')
                                    ->default('ServiceSectionKeywordResearchItem')
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
                return $query->keywordResearchItems();
            })
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->limit(30)
                    ->searchable(),
                Tables\Columns\TextColumn::make('sub_title')
                    ->label('Sub Title')
                    ->sortable()
                    ->limit(30)
                    ->searchable(),
                ImageColumn::make('image')
                    ->disk('public')
                    ->circular()
                    ->getStateUsing(function ($record) {

                        return $record->image;
                    })
                    ->defaultImageUrl(url('/images/placeholder.png')),
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
            'index' => Pages\ListKeywordResearchItems::route('/'),
            'create' => Pages\CreateKeywordResearchItem::route('/create'),
            'edit' => Pages\EditKeywordResearchItem::route('/{record}/edit'),
        ];
    }
}
