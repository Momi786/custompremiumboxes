<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class BlogPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make([
                    Section::make('Post Information')
                        ->description('Basic information about the blog post')
                        ->icon('heroicon-o-document-text')
                        ->schema([
                            Grid::make(2)
                                ->schema([
                                    TextInput::make('title')
                                        ->label('Post Title')
                                        ->required()
                                        ->maxLength(255)
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(function ($state, $set) {
                                            $set('slug', Str::slug($state));
                                        })
                                        ->helperText('Enter the post title'),

                                    TextInput::make('slug')
                                        ->label('URL Slug')
                                        ->required()
                                        ->maxLength(255)
                                        ->unique(ignoreRecord: true)
                                        ->helperText('SEO-friendly URL slug. Automatically generated from the title.')
                                        ->prefix('/blog/')
                                        ->alphaDash(),
                                ]),

                            Textarea::make('excerpt')
                                ->label('Excerpt')
                                ->rows(3)
                                ->maxLength(500)
                                ->helperText('A brief summary of the post shown in listings (optional)')
                                ->columnSpanFull(),

                            RichEditor::make('content')
                                ->label('Content')
                                ->required()
                                ->toolbarButtons([
                                    'bold',
                                    'italic',
                                    'underline',
                                    'h2',
                                    'h3',
                                    'bulletList',
                                    'orderedList',
                                    'link',
                                    'blockquote',
                                    'codeBlock',
                                    'undo',
                                    'redo',
                                ])
                                ->helperText('Write your blog post content here')
                                ->columnSpanFull(),

                            FileUpload::make('featured_image')
                                ->label('Featured Image')
                                ->image()
                                ->disk('public')
                                ->directory('blog/posts')
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    null,
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ])
                                ->helperText('Upload a featured image for this post. Recommended size: 1200x630px')
                                ->columnSpanFull(),
                        ])
                        ->columns(2),

                    Section::make('Categories')
                        ->description('Assign this post to categories')
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
                                ->helperText('Select one or more categories for this post.')
                                ->columnSpanFull(),
                        ]),

                    Section::make('Publishing')
                        ->description('Publish settings and metadata')
                        ->icon('heroicon-o-calendar')
                        ->schema([
                            Grid::make(2)
                                ->schema([
                                    DateTimePicker::make('published_at')
                                        ->label('Published At')
                                        ->helperText('Set when this post should be published. Leave empty to save as draft.')
                                        ->displayFormat('M d, Y H:i')
                                        ->timezone(config('app.timezone')),

                                    TextInput::make('author_name')
                                        ->label('Author Name')
                                        ->maxLength(255)
                                        ->helperText('Name of the author (optional)'),
                                ]),
                        ]),

                    Section::make('SEO Settings')
                        ->description('Search engine optimization settings')
                        ->icon('heroicon-o-magnifying-glass')
                        ->collapsible()
                        ->schema([
                            TextInput::make('meta_title')
                                ->label('Meta Title')
                                ->maxLength(60)
                                ->helperText('Recommended: 50-60 characters. Leave empty to use post title.')
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
                                ->helperText('Comma-separated keywords for this post (optional)')
                                ->columnSpanFull(),
                        ])
                        ->columns(1),

                    Section::make('Status & Settings')
                        ->description('Control post visibility and features')
                        ->icon('heroicon-o-cog-6-tooth')
                        ->schema([
                            Grid::make(3)
                                ->schema([
                                    Toggle::make('is_active')
                                        ->label('Active')
                                        ->helperText('Make this post visible on the website')
                                        ->default(true)
                                        ->inline(false),

                                    Toggle::make('is_featured')
                                        ->label('Featured')
                                        ->helperText('Display this post prominently')
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
