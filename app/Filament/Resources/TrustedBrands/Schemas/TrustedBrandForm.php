<?php

namespace App\Filament\Resources\TrustedBrands\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TrustedBrandForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make([
                    Section::make('Brand Information')
                        ->description('Add a trusted brand logo to display in the slider')
                        ->icon('heroicon-o-building-office')
                        ->schema([
                            Grid::make(2)
                                ->schema([
                                    TextInput::make('name')
                                        ->label('Brand Name')
                                        ->required()
                                        ->maxLength(255)
                                        ->helperText('Enter the brand name (e.g., "Nike", "Apple", etc.)'),

                                    TextInput::make('website_url')
                                        ->label('Website URL')
                                        ->url()
                                        ->maxLength(255)
                                        ->helperText('Optional: Link to the brand\'s website')
                                        ->prefix('https://'),
                                ]),

                            FileUpload::make('logo')
                                ->label('Brand Logo')
                                ->image()
                                ->disk('public')
                                ->directory('trusted-brands')
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ])
                                ->maxSize(2048)
                                ->helperText('Upload the brand logo. Recommended size: 200x100px or similar aspect ratio.')
                                ->required(),

                            TextInput::make('sort_order')
                                ->label('Sort Order')
                                ->numeric()
                                ->default(0)
                                ->helperText('Lower numbers appear first in the slider'),

                            Toggle::make('is_active')
                                ->label('Active')
                                ->default(true)
                                ->helperText('Only active brands will be displayed in the slider'),
                        ]),
                ]),
            ]);
    }
}
