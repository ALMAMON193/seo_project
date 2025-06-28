<?php

namespace App\Filament\Resources;

use App\Models\CMS;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TechnicalSEOResource\Pages;

class TechnicalSEOResource extends Resource
{
    protected static ?string $model = CMS::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Technical SEO';
    protected static ?string $navigationLabel = 'Technical SEO';

    /**
     * Define the query scope for filtering Technical SEO records.
     */
    public function scopeTechnicalSeo(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageTechnicalSeo')
            ->where('section', 'ServiceSectionTechnicalSeo');
    }

    /**
     * Configure the form for creating/editing records.
     */
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
                                    ->required()
                                    ->columnSpanFull(),
                                RichEditor::make('content')
                                    ->label('Content')
                                    ->required()
                                    ->columnSpanFull(),
                                TextInput::make('btn_text')
                                    ->label('Button Text')
                                    ->maxLength(255)
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

                        Section::make('Page & Section Settings')
                            ->schema([
                                TextInput::make('page')
                                    ->default('ServicePageTechnicalSeo')
                                    ->disabled()
                                    ->dehydrated(true),
                                TextInput::make('section')
                                    ->default('ServiceSectionTechnicalSeo')
                                    ->disabled()
                                    ->dehydrated(true),
                            ])
                            ->columnSpan(4),
                    ]),
            ]);
    }

    /**
     * Configure the table for listing records.
     */
    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                return $query->technicalSeo();
            })
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable()
                    ->limit(30)
                    ->formatStateUsing(fn(?string $state): string => strip_tags($state ?? '')),
                Tables\Columns\TextColumn::make('content')
                    ->label('Content')
                    ->sortable()
                    ->searchable()
                    ->limit(30)
                    ->formatStateUsing(fn(?string $state): string => strip_tags($state ?? '')),
                Tables\Columns\TextColumn::make('btn_text')
                    ->label('Button Text')
                    ->sortable()
                    ->searchable()
                    ->limit(30)
                    ->formatStateUsing(fn(?string $state): string => strip_tags($state ?? '')),
                ImageColumn::make('image')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('image_alt')
                    ->label('Image Alt Text')
                    ->sortable()
                    ->searchable()
                    ->limit(20)
                    ->formatStateUsing(fn(?string $state): string => strip_tags($state ?? '')),
            ])
            ->filters([
                // Add filters if needed
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

    /**
     * Define related models.
     */
    public static function getRelations(): array
    {
        return [
            // Add relations if needed
        ];
    }

    /**
     * Define the resource's routes.
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTechnicalSEOS::route('/'),
            'create' => Pages\CreateTechnicalSEO::route('/create'),
            'edit' => Pages\EditTechnicalSEO::route('/{record}/edit'),
        ];
    }
}
