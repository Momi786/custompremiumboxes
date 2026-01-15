<?php

namespace App\Filament\Resources\TrustedBrands\Pages;

use App\Filament\Resources\TrustedBrands\TrustedBrandResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTrustedBrand extends EditRecord
{
    protected static string $resource = TrustedBrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
