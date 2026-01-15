<?php

namespace App\Filament\Pages;

use App\Models\Settings as SettingsModel;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected string $view = 'filament.pages.settings';

    protected static ?string $navigationLabel = 'Settings';

    protected static ?string $title = 'Settings';

    protected static ?int $navigationSort = 100;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'navigation_logo' => SettingsModel::get('navigation_logo'),
            'footer_logo' => SettingsModel::get('footer_logo'),
            'favicon' => SettingsModel::get('favicon'),
            'home_meta_title' => SettingsModel::get('home_meta_title'),
            'home_meta_description' => SettingsModel::get('home_meta_description'),
            'about_meta_title' => SettingsModel::get('about_meta_title'),
            'about_meta_description' => SettingsModel::get('about_meta_description'),
            'contact_meta_title' => SettingsModel::get('contact_meta_title'),
            'contact_meta_description' => SettingsModel::get('contact_meta_description'),
            'blog_meta_title' => SettingsModel::get('blog_meta_title'),
            'blog_meta_description' => SettingsModel::get('blog_meta_description'),
            'why_custom_premium_boxes_meta_title' => SettingsModel::get('why_custom_premium_boxes_meta_title'),
            'why_custom_premium_boxes_meta_description' => SettingsModel::get('why_custom_premium_boxes_meta_description'),
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    Tabs::make('Settings')
                        ->tabs([
                            Tab::make('Logos & Favicon')
                                ->icon('heroicon-o-photo')
                                ->schema([
                                    Section::make('Logo Settings')
                                        ->description('Upload logos for navigation and footer sections')
                                        ->schema([
                                            FileUpload::make('navigation_logo')
                                                ->label('Navigation Logo')
                                                ->image()
                                                ->disk('public')
                                                ->directory('logos')
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '16:9',
                                                    '4:3',
                                                    '1:1',
                                                ])
                                                ->helperText('Logo displayed in the navigation header. Recommended size: 200x60px or similar aspect ratio.')
                                                ->columnSpanFull(),

                                            FileUpload::make('footer_logo')
                                                ->label('Footer Logo')
                                                ->image()
                                                ->disk('public')
                                                ->directory('logos')
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '16:9',
                                                    '4:3',
                                                    '1:1',
                                                ])
                                                ->helperText('Logo displayed in the footer section. Recommended size: 200x60px or similar aspect ratio.')
                                                ->columnSpanFull(),

                                            FileUpload::make('favicon')
                                                ->label('Favicon')
                                                ->image()
                                                ->disk('public')
                                                ->directory('logos')
                                                ->imageEditor()
                                                ->imageEditorAspectRatios(['1:1'])
                                                ->maxSize(512)
                                                ->helperText('Favicon displayed in browser tabs. Recommended size: 32x32px or 16x16px. Supported formats: .ico, .png, .svg')
                                                ->columnSpanFull(),
                                        ]),
                                ]),

                            Tab::make('Home Page')
                                ->icon('heroicon-o-home')
                                ->schema([
                                    Section::make('Home Page SEO')
                                        ->description('Meta tags for the home page')
                                        ->schema([
                                            TextInput::make('home_meta_title')
                                                ->label('Meta Title')
                                                ->maxLength(60)
                                                ->helperText('Recommended: 50-60 characters')
                                                ->columnSpanFull(),

                                            Textarea::make('home_meta_description')
                                                ->label('Meta Description')
                                                ->rows(3)
                                                ->maxLength(160)
                                                ->helperText('Recommended: 150-160 characters')
                                                ->columnSpanFull(),
                                        ]),
                                ]),

                            Tab::make('About Page')
                                ->icon('heroicon-o-information-circle')
                                ->schema([
                                    Section::make('About Page SEO')
                                        ->description('Meta tags for the about page')
                                        ->schema([
                                            TextInput::make('about_meta_title')
                                                ->label('Meta Title')
                                                ->maxLength(60)
                                                ->helperText('Recommended: 50-60 characters')
                                                ->columnSpanFull(),

                                            Textarea::make('about_meta_description')
                                                ->label('Meta Description')
                                                ->rows(3)
                                                ->maxLength(160)
                                                ->helperText('Recommended: 150-160 characters')
                                                ->columnSpanFull(),
                                        ]),
                                ]),

                            Tab::make('Contact Page')
                                ->icon('heroicon-o-envelope')
                                ->schema([
                                    Section::make('Contact Page SEO')
                                        ->description('Meta tags for the contact page')
                                        ->schema([
                                            TextInput::make('contact_meta_title')
                                                ->label('Meta Title')
                                                ->maxLength(60)
                                                ->helperText('Recommended: 50-60 characters')
                                                ->columnSpanFull(),

                                            Textarea::make('contact_meta_description')
                                                ->label('Meta Description')
                                                ->rows(3)
                                                ->maxLength(160)
                                                ->helperText('Recommended: 150-160 characters')
                                                ->columnSpanFull(),
                                        ]),
                                ]),

                            Tab::make('Blog List Page')
                                ->icon('heroicon-o-document-text')
                                ->schema([
                                    Section::make('Blog List Page SEO')
                                        ->description('Meta tags for the blog listing page')
                                        ->schema([
                                            TextInput::make('blog_meta_title')
                                                ->label('Meta Title')
                                                ->maxLength(60)
                                                ->helperText('Recommended: 50-60 characters')
                                                ->columnSpanFull(),

                                            Textarea::make('blog_meta_description')
                                                ->label('Meta Description')
                                                ->rows(3)
                                                ->maxLength(160)
                                                ->helperText('Recommended: 150-160 characters')
                                                ->columnSpanFull(),
                                        ]),
                                ]),

                            Tab::make('Why Custom Premium Boxes')
                                ->icon('heroicon-o-question-mark-circle')
                                ->schema([
                                    Section::make('Why Custom Premium Boxes Page SEO')
                                        ->description('Meta tags for the why custom premium boxes page')
                                        ->schema([
                                            TextInput::make('why_custom_premium_boxes_meta_title')
                                                ->label('Meta Title')
                                                ->maxLength(60)
                                                ->helperText('Recommended: 50-60 characters')
                                                ->columnSpanFull(),

                                            Textarea::make('why_custom_premium_boxes_meta_description')
                                                ->label('Meta Description')
                                                ->rows(3)
                                                ->maxLength(160)
                                                ->helperText('Recommended: 150-160 characters')
                                                ->columnSpanFull(),
                                        ]),
                                ]),
                        ])
                        ->columnSpanFull(),
                ])
                    ->livewireSubmitHandler('save')
                    ->footer([
                        \Filament\Schemas\Components\Actions::make([
                            \Filament\Actions\Action::make('save')
                                ->label('Save Settings')
                                ->submit('save'),
                        ]),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        SettingsModel::set('navigation_logo', $data['navigation_logo'] ?? null);
        SettingsModel::set('footer_logo', $data['footer_logo'] ?? null);
        SettingsModel::set('favicon', $data['favicon'] ?? null);
        SettingsModel::set('home_meta_title', $data['home_meta_title'] ?? null);
        SettingsModel::set('home_meta_description', $data['home_meta_description'] ?? null);
        SettingsModel::set('about_meta_title', $data['about_meta_title'] ?? null);
        SettingsModel::set('about_meta_description', $data['about_meta_description'] ?? null);
        SettingsModel::set('contact_meta_title', $data['contact_meta_title'] ?? null);
        SettingsModel::set('contact_meta_description', $data['contact_meta_description'] ?? null);
        SettingsModel::set('blog_meta_title', $data['blog_meta_title'] ?? null);
        SettingsModel::set('blog_meta_description', $data['blog_meta_description'] ?? null);
        SettingsModel::set('why_custom_premium_boxes_meta_title', $data['why_custom_premium_boxes_meta_title'] ?? null);
        SettingsModel::set('why_custom_premium_boxes_meta_description', $data['why_custom_premium_boxes_meta_description'] ?? null);

        Notification::make()
            ->title('Settings saved successfully')
            ->success()
            ->send();
    }
}
