<?php

namespace App\Filament\Resources\TrustedBrands\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class TrustedBrandsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->label('Logo')
                    ->circular()
                    ->size(60)
                    ->defaultImageUrl(url('/images/placeholder.png')),

                TextColumn::make('name')
                    ->label('Brand Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('website_url')
                    ->label('Website')
                    ->url(fn ($record) => $record->website_url)
                    ->openUrlInNewTab()
                    ->limit(30)
                    ->toggleable(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable()
                    ->alignCenter()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('is_active')
                    ->label('Status')
                    ->options([
                        true => 'Active',
                        false => 'Inactive',
                    ]),
            ])
            ->defaultSort('sort_order', 'asc')
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading('No trusted brands yet')
            ->emptyStateDescription('Add your first trusted brand to get started.')
            ->emptyStateIcon('heroicon-o-building-office');
    }
}
