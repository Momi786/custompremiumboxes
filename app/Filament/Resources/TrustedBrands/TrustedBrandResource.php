<?php

namespace App\Filament\Resources\TrustedBrands;

use App\Filament\Resources\TrustedBrands\Pages\CreateTrustedBrand;
use App\Filament\Resources\TrustedBrands\Pages\EditTrustedBrand;
use App\Filament\Resources\TrustedBrands\Pages\ListTrustedBrands;
use App\Filament\Resources\TrustedBrands\Schemas\TrustedBrandForm;
use App\Filament\Resources\TrustedBrands\Tables\TrustedBrandsTable;
use App\Models\TrustedBrand;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TrustedBrandResource extends Resource
{
    protected static ?string $model = TrustedBrand::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingOffice;

    protected static ?string $navigationLabel = 'Trusted Brands';

    protected static ?string $modelLabel = 'Trusted Brand';

    protected static ?string $pluralModelLabel = 'Trusted Brands';

    protected static string|\UnitEnum|null $navigationGroup = 'Content';

    protected static ?int $navigationSort = 10;

    public static function form(Schema $schema): Schema
    {
        return TrustedBrandForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TrustedBrandsTable::configure($table);
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
            'index' => ListTrustedBrands::route('/'),
            'create' => CreateTrustedBrand::route('/create'),
            'edit' => EditTrustedBrand::route('/{record}/edit'),
        ];
    }
}
