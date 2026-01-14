<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make([
                    Section::make('Product Information')
                        ->description('Basic information about the product')
                        ->icon('heroicon-o-shopping-bag')
                        ->schema([
                            Grid::make(2)
                                ->schema([
                                    TextInput::make('name')
                                        ->label('Product Name')
                                        ->required()
                                        ->maxLength(255)
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(function ($state, $set) {
                                            $set('slug', Str::slug($state));
                                        })
                                        ->helperText('Enter the product name that will be displayed to customers'),
                                    
                                    TextInput::make('slug')
                                        ->label('URL Slug')
                                        ->required()
                                        ->maxLength(255)
                                        ->unique(ignoreRecord: true)
                                        ->helperText('SEO-friendly URL slug. Automatically generated from the name.')
                                        ->prefix('/products/')
                                        ->alphaDash(),
                                ]),
                            
                            Grid::make(2)
                                ->schema([
                                    TextInput::make('sku')
                                        ->label('SKU')
                                        ->maxLength(100)
                                        ->unique(ignoreRecord: true)
                                        ->helperText('Stock Keeping Unit (optional)'),
                                    
                                    TextInput::make('price')
                                        ->label('Price')
                                        ->numeric()
                                        ->prefix('$')
                                        ->step(0.01)
                                        ->minValue(0)
                                        ->helperText('Product price in USD (optional)'),
                                ]),
                            
                            Textarea::make('short_description')
                                ->label('Short Description')
                                ->rows(2)
                                ->maxLength(500)
                                ->helperText('A brief description shown in product listings (optional)')
                                ->columnSpanFull(),
                            
                            RichEditor::make('description')
                                ->label('Full Description')
                                ->toolbarButtons([
                                    'bold',
                                    'italic',
                                    'underline',
                                    'bulletList',
                                    'orderedList',
                                    'link',
                                    'undo',
                                    'redo',
                                ])
                                ->helperText('Detailed product description with formatting options')
                                ->columnSpanFull(),
                        ])
                        ->columns(2),
                    
                    Section::make('Categories')
                        ->description('Assign this product to categories')
                        ->icon('heroicon-o-tag')
                        ->schema([
                            Select::make('categories')
                                ->label('Categories')
                                ->relationship('categories', 'name')
                                ->multiple()
                                ->searchable()
                                ->preload()
                                ->createOptionForm([
                                    TextInput::make('name')
                                        ->required()
                                        ->maxLength(255),
                                ])
                                ->helperText('Select one or more categories for this product. Use the search to find categories quickly.')
                                ->columnSpanFull(),
                        ]),
                    
                    Section::make('Product Images')
                        ->description('Upload product images')
                        ->icon('heroicon-o-photo')
                        ->schema([
                            FileUpload::make('image')
                                ->label('Main Product Image')
                                ->image()
                                ->disk('public')
                                ->directory('products')
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ])
                                ->helperText('Main product image. Recommended size: 1200x1200px')
                                ->columnSpanFull(),
                            
                            FileUpload::make('gallery')
                                ->label('Product Gallery')
                                ->image()
                                ->disk('public')
                                ->directory('products/gallery')
                                ->multiple()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ])
                                ->maxFiles(10)
                                ->helperText('Additional product images (up to 10). Recommended size: 1200x1200px')
                                ->columnSpanFull(),
                        ]),
                    
                    Section::make('SEO Settings')
                        ->description('Search engine optimization settings')
                        ->icon('heroicon-o-magnifying-glass')
                        ->collapsible()
                        ->schema([
                            TextInput::make('meta_title')
                                ->label('Meta Title')
                                ->maxLength(60)
                                ->helperText('Recommended: 50-60 characters. Leave empty to use product name.')
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
                                ->helperText('Comma-separated keywords for this product (optional)')
                                ->columnSpanFull(),
                        ])
                        ->columns(1),
                    
                    Section::make('Status & Settings')
                        ->description('Control product visibility and features')
                        ->icon('heroicon-o-cog-6-tooth')
                        ->schema([
                            Grid::make(3)
                                ->schema([
                                    Toggle::make('is_active')
                                        ->label('Active')
                                        ->helperText('Make this product visible on the website')
                                        ->default(true)
                                        ->inline(false),
                                    
                                    Toggle::make('is_featured')
                                        ->label('Featured')
                                        ->helperText('Display this product prominently')
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
