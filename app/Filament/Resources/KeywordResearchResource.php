<?php

namespace App\Filament\Resources;

use App\Models\CMS;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\KeywordResearch;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KeywordResearchResource\Pages;
use App\Filament\Resources\KeywordResearchResource\RelationManagers;

class KeywordResearchResource extends Resource
{
    protected static ?string $model = CMS::class;



    protected static ?string $navigationGroup = 'Keyword Research and Tracking';
    protected static ?string $navigationLabel = 'Keyword Research';
    protected static ?int $navigationSort = -100;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(12)
                    ->schema([

                        Section::make('Content Details')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title')
                                    ->maxLength(255)
                                    ->placeholder('For example: Keyword Research & Tracking')
                                    ->columnSpanFull(),

                                TextInput::make('sub_title')
                                    ->label('Title')
                                    ->maxLength(255)
                                    ->placeholder('For example: We go far beyond basic keyword lists. ')
                                    ->columnSpanFull(),
                                RichEditor::make('content')
                                    ->label('Content')
                                    ->placeholder('For example: Our process begins with in-depth research to identify keyword variations that have lower competition but high strategic value. By targeting these, we help your site build topical relevance, making it easier to rank for broader, more competitive terms over time. ')
                                    ->columnSpanFull(),
                                FileUpload::make('image')
                                    ->label('Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('cms-images')
                                    ->columnSpanFull(),
                                TextInput::make('image_alt')
                                    ->label('Image Alt Text')
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                            ])
                            ->columnSpan(8),

                        Section::make('Page & Section Settings Local SEO')
                            ->schema([
                                TextInput::make('page')
                                    ->default('ServicePageKeywordResearch')
                                    ->disabled()
                                    ->dehydrated(true),
                                TextInput::make('section')
                                    ->default('ServiceSectionKeywordResearch')
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
                return $query->keywordResearch();
            })
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable()->limit(30)
                    ->formatStateUsing(fn(string $state): string => strip_tags($state)),
                Tables\Columns\TextColumn::make('content')
                    ->label('Content')
                    ->sortable()
                    ->searchable()->limit(30)->formatStateUsing(fn(string $state): string => strip_tags($state)),
                ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('image_alt')
                    ->label('Image Alt Text')
                    ->sortable()
                    ->searchable()->limit(30)->formatStateUsing(fn(string $state): string => strip_tags($state)),
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
            'index' => Pages\ListKeywordResearch::route('/'),
            'create' => Pages\CreateKeywordResearch::route('/create'),
            'edit' => Pages\EditKeywordResearch::route('/{record}/edit'),
        ];
    }
}
