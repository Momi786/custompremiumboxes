<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make([
                    Section::make('Category Information')
                        ->description('Basic information about the category')
                        ->icon('heroicon-o-tag')
                        ->schema([
                            Grid::make(2)
                                ->schema([
                                    TextInput::make('name')
                                        ->label('Category Name')
                                        ->required()
                                        ->maxLength(255)
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(function ($state, $set) {
                                            $set('slug', Str::slug($state));
                                        })
                                        ->helperText('Enter the category name that will be displayed to customers'),

                                    TextInput::make('slug')
                                        ->label('URL Slug')
                                        ->required()
                                        ->maxLength(255)
                                        ->unique(ignoreRecord: true)
                                        ->helperText('SEO-friendly URL slug. Automatically generated from the name.')
                                        ->prefix('/categories/')
                                        ->alphaDash(),
                                ]),

                            Textarea::make('description')
                                ->label('Description')
                                ->rows(4)
                                ->maxLength(1000)
                                ->helperText('A brief description of the category (optional)')
                                ->columnSpanFull(),

                            FileUpload::make('image')
                                ->label('Category Image')
                                ->image()
                                ->disk('public')
                                ->directory('categories')
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ])
                                ->helperText('Upload an image for this category. Recommended size: 1200x800px')
                                ->columnSpanFull(),
                        ])
                        ->columns(2),

                    Section::make('SEO Settings')
                        ->description('Search engine optimization settings')
                        ->icon('heroicon-o-magnifying-glass')
                        ->collapsible()
                        ->schema([
                            TextInput::make('meta_title')
                                ->label('Meta Title')
                                ->maxLength(60)
                                ->helperText('Recommended: 50-60 characters. Leave empty to use category name.')
                                ->columnSpanFull(),

                            Textarea::make('meta_description')
                                ->label('Meta Description')
                                ->rows(3)
                                ->maxLength(160)
                                ->helperText('Recommended: 150-160 characters. A brief summary for search engines.')
                                ->columnSpanFull(),

                            Textarea::make('meta_keywords')
                                ->label('Meta Keywords')
                                ->rows(2)
                                ->maxLength(255)
                                ->helperText('Comma-separated keywords for this category (optional)')
                                ->columnSpanFull(),
                        ])
                        ->columns(1),

                    Section::make('Status & Settings')
                        ->description('Control category visibility and features')
                        ->icon('heroicon-o-cog-6-tooth')
                        ->schema([
                            Grid::make(3)
                                ->schema([
                                    Toggle::make('is_active')
                                        ->label('Active')
                                        ->helperText('Make this category visible on the website')
                                        ->default(true)
                                        ->inline(false),

                                    Toggle::make('is_featured')
                                        ->label('Featured')
                                        ->helperText('Display this category prominently')
                                        ->default(false)
                                        ->inline(false),

                                    TextInput::make('sort_order')
                                        ->label('Sort Order')
                                        ->numeric()
                                        ->default(0)
                                        ->helperText('Lower numbers appear first')
                                        ->minValue(0),
                                ]),
                        ]),
                ])
                    ->columnSpan(['lg' => 2]),
            ]);
    }
}
