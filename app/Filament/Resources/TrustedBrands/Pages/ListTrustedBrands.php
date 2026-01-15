<?php

namespace App\Filament\Resources\TrustedBrands\Pages;

use App\Filament\Resources\TrustedBrands\TrustedBrandResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTrustedBrands extends ListRecords
{
    protected static string $resource = TrustedBrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
