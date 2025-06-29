<?php

namespace App\Filament\Resources;

use App\Models\CMS;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AboutMYWorkItemResource\Pages;

class AboutMYWorkItemResource extends Resource
{
    protected static ?string $model = CMS::class;

    protected static ?string $navigationGroup = 'About Sections';

    protected static ?string $label = 'My Work Items';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(12)
                    ->schema([
                        Section::make('Content Details')
                            ->schema([
                                TextInput::make('title')
                                    ->maxLength(255)

                                    ->columnSpanFull(),
                                Textarea::make('content')

                                    ->columnSpanFull(),
                                FileUpload::make('image')
                                    ->image()
                                    ->directory('about-my-work-items')

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
                                    ->default('AboutPageMyWorkItem')
                                    ->disabled()
                                    ->dehydrated(true),
                                TextInput::make('section')
                                    ->default('AboutSectionMyWorkItem')
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
                return $query->where('page', 'AboutPageMyWorkItem')
                    ->where('section', 'AboutSectionMyWorkItem');
            })
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->limit(30)
                    ->searchable(),
                Tables\Columns\TextColumn::make('content')
                    ->label('Content')
                    ->sortable()
                    ->limit(30)
                    ->searchable()
                    ->formatStateUsing(fn(?string $state): string => strip_tags($state ?? '')),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('image_alt')
                    ->label('Image Alt Text')
                    ->sortable()
                    ->searchable()
                    ->limit(30)
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
            'index' => Pages\ListAboutMYWorkItems::route('/'),
            'create' => Pages\CreateAboutMYWorkItem::route('/create'),
            'edit' => Pages\EditAboutMYWorkItem::route('/{record}/edit'),
        ];
    }
}
