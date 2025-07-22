<?php

namespace App\Filament\Resources;

use App\Models\CMS;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\LocalSEOItem;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LocalSEOItemResource\Pages;
use App\Filament\Resources\LocalSEOItemResource\RelationManagers;

class LocalSEOItemResource extends Resource
{
    protected static ?string $model = CMS::class;


    protected static ?string $navigationGroup = 'Local SEO';
    protected static ?string $navigationLabel = 'Local SEO Items';
    protected static ?int $navigationSort = 0;


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
                                    ->placeholder('Title Here')
                                    ->columnSpanFull(),
                            ])
                            ->columnSpan(8),

                        Section::make('Page & Section Settings')
                            ->schema([
                                TextInput::make('page')
                                    ->default('ServicePageLocalSeoItem')
                                    ->disabled()
                                    ->dehydrated(true),
                                TextInput::make('section')
                                    ->default('ServiceSectionLocalSeoItem')
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
                return $query->localSeoItems();
            })
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListLocalSEOItems::route('/'),
            'create' => Pages\CreateLocalSEOItem::route('/create'),
            'edit' => Pages\EditLocalSEOItem::route('/{record}/edit'),
        ];
    }
}
