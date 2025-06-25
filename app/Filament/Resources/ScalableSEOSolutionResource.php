<?php

namespace App\Filament\Resources;

use App\Models\CMS;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\ScalableSEOSolution;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ScalableSEOSolutionResource\Pages;
use App\Filament\Resources\ScalableSEOSolutionResource\RelationManagers;

class ScalableSEOSolutionResource extends Resource
{
    protected static ?string $model = CMS::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
      protected static ?string $navigationGroup = 'Enterprise SEO';
    protected static ?string $navigationLabel = 'Scalable SEO Solutions';

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

                                    ->columnSpanFull(),
                                RichEditor::make('content')
                                    ->label('Content')

                                    ->columnSpanFull(),
                            ])
                            ->columnSpan(8),

                        Section::make('Page & Section Settings')
                            ->schema([
                                TextInput::make('page')
                                    ->default('ServicePageScalableSeo')
                                    ->disabled()
                                    ->dehydrated(true),
                                TextInput::make('section')
                                    ->default('ServiceSectionScalableSeo')
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
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListScalableSEOSolutions::route('/'),
            'create' => Pages\CreateScalableSEOSolution::route('/create'),
            'edit' => Pages\EditScalableSEOSolution::route('/{record}/edit'),
        ];
    }
}
