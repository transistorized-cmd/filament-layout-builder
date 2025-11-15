# Filament Layout Builder

A powerful drag-and-drop email/layout builder for Filament forms. Build beautiful, responsive email templates with an intuitive interface directly in your Filament admin panel.

![Filament Layout Builder](screenshot.png)

## Features

- 🎨 **Drag & Drop Interface** - Intuitive block-based builder
- 📱 **Responsive Preview** - Desktop and mobile views
- 🔄 **Undo/Redo** - Full history management
- ⌨️ **Keyboard Shortcuts** - Power user friendly
- 🎯 **Block Types**:
  - Text (with H1-H4, bold, italic)
  - Image (with upload and linking)
  - Button
  - Divider
  - Spacer
  - Columns (2, 3, 1/3+2/3, 2/3+1/3)
  - Video
  - Social Icons
  - Custom HTML
- 🎨 **Background Customization** - Colors, images, positioning
- 📧 **Email Compatible** - Generates table-based HTML for all email clients
- 💾 **JSON Storage** - Stores layouts as JSON for easy editing

## Requirements

- PHP 8.1+
- Laravel 10.0+ or 11.0+
- Filament 3.0+

## Installation

### 1. Install via Composer

```bash
composer require transistor/filament-layout-builder
```

### 2. Publish Assets

```bash
php artisan vendor:publish --tag=filament-layout-builder-assets
```

### 3. (Optional) Publish Config

```bash
php artisan vendor:publish --tag=filament-layout-builder-config
```

## Usage

### Basic Usage

Add the `LayoutBuilder` field to any Filament form:

```php
use Transistor\FilamentLayoutBuilder\Forms\Components\LayoutBuilder;

public static function form(Form $form): Form
{
    return $form
        ->schema([
            LayoutBuilder::make('email_content')
                ->label('Email Layout')
                ->required(),
        ]);
}
```

### Database Column

The field expects a JSON column in your database:

```php
// In your migration
$table->json('email_content')->nullable();
```

### Accessing the Data

The field stores the layout as JSON. To render it as HTML:

```php
use Transistor\FilamentLayoutBuilder\Helpers\EmailExporter;

// Get the JSON data from your model
$emailData = $model->email_content;

// Convert to HTML
$html = EmailExporter::toHtml($emailData);

// Use in emails
Mail::send([], [], function ($message) use ($html) {
    $message->to('user@example.com')
        ->subject('Your Email')
        ->html($html);
});
```

### Configuration Options

#### Disable Undo/Redo

```php
LayoutBuilder::make('email_content')
    ->undoRedo(false)
```

#### Disable Keyboard Shortcuts

```php
LayoutBuilder::make('email_content')
    ->keyboardShortcuts(false)
```

#### Disable Settings Panel

```php
LayoutBuilder::make('email_content')
    ->settings(false)
```

#### Set Maximum Image Upload Size

```php
LayoutBuilder::make('email_content')
    ->maxImageSize(5) // 5MB
```

#### Enable Only Specific Blocks

```php
LayoutBuilder::make('email_content')
    ->enabledBlocks([
        'text',
        'image',
        'button',
        'divider',
        'spacer',
    ])
```

#### Disable Specific Blocks

```php
LayoutBuilder::make('email_content')
    ->disableBlocks(['html', 'video'])
```

### Multiple Instances

**Yes!** Multiple layout builder fields can coexist on the same page without conflicts. Each instance:

- ✅ Has its own isolated state and history
- ✅ Uses unique DOM IDs based on the field's state path
- ✅ Keyboard shortcuts only affect the focused instance
- ✅ Auto-saves independently

**Example with multiple fields:**

```php
public static function form(Form $form): Form
{
    return $form
        ->schema([
            LayoutBuilder::make('email_header')
                ->label('Email Header'),

            LayoutBuilder::make('email_body')
                ->label('Email Body'),

            LayoutBuilder::make('email_footer')
                ->label('Email Footer'),
        ]);
}
```

Each field will work independently without interfering with others.

### Advanced Usage

#### With Default Value

```php
LayoutBuilder::make('email_content')
    ->default([
        'blocks' => [
            [
                'type' => 'text',
                'content' => 'Welcome to our newsletter!',
                'fontSize' => '24px',
                'textAlign' => 'center',
            ],
        ],
        'settings' => [
            'backgroundColor' => '#ffffff',
        ],
    ])
```

#### In a Wizard Step

```php
use Filament\Forms\Components\Wizard;

Wizard::make([
    Wizard\Step::make('Design')
        ->schema([
            LayoutBuilder::make('email_content'),
        ]),
    // ... more steps
])
```

## Keyboard Shortcuts

- `Cmd/Ctrl + Z` - Undo
- `Cmd/Ctrl + Shift + Z` or `Cmd/Ctrl + Y` - Redo
- `Delete` or `Backspace` - Delete selected block
- `Cmd/Ctrl + C` - Copy selected block
- `Cmd/Ctrl + V` - Paste block
- `Cmd/Ctrl + D` - Duplicate selected block

## Block Types

### Text
Rich text with formatting options:
- Headers (H1-H4)
- Bold, Italic
- Font family, size, color
- Text alignment
- Background color

### Image
Upload images or use URLs:
- File upload (converts to base64)
- External URL support
- Optional link wrapping
- Alignment control

### Button
Customizable call-to-action buttons:
- Text and URL
- Colors (background, text)
- Border radius
- Alignment

### Divider
Horizontal separators:
- Border style, width, color
- Spacing control

### Spacer
Add vertical spacing:
- Adjustable height

### Columns
Create multi-column layouts:
- 2 columns (50/50)
- 3 columns (33/33/33)
- 1/3 + 2/3
- 2/3 + 1/3
- Nest blocks inside columns

### Video
Embed video thumbnails:
- Video URL
- Thumbnail image
- Click-through functionality

### Social Icons
Add social media links:
- Pre-configured icons
- Customizable URLs
- Icon size control

### Custom HTML
Insert custom HTML:
- Full control
- Advanced use cases

## Export to HTML

The `EmailExporter` class converts your JSON layout to email-compatible HTML:

```php
use Transistor\FilamentLayoutBuilder\Helpers\EmailExporter;

// From JSON string
$html = EmailExporter::toHtml($jsonString);

// From array
$html = EmailExporter::toHtml([
    'blocks' => [...],
    'settings' => [...],
]);
```

The generated HTML is:
- ✅ Compatible with all major email clients (Gmail, Outlook, Apple Mail, etc.)
- ✅ Table-based layout for maximum compatibility
- ✅ Inline CSS styles
- ✅ VML for Outlook button support
- ✅ Responsive-friendly

## Example: Complete Email Template Resource

```php
<?php

namespace App\Filament\Resources;

use App\Models\EmailTemplate;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Transistor\FilamentLayoutBuilder\Forms\Components\LayoutBuilder;
use Transistor\FilamentLayoutBuilder\Helpers\EmailExporter;

class EmailTemplateResource extends Resource
{
    protected static ?string $model = EmailTemplate::class;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('subject')
                    ->required()
                    ->maxLength(255),

                LayoutBuilder::make('content')
                    ->label('Email Layout')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('subject')
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

                Tables\Actions\Action::make('preview')
                    ->icon('heroicon-o-eye')
                    ->url(fn (EmailTemplate $record): string =>
                        route('email-preview', $record)
                    )
                    ->openUrlInNewTab(),
            ]);
    }
}
```

## Troubleshooting

### Assets Not Loading

Make sure you've published the assets:

```bash
php artisan vendor:publish --tag=filament-layout-builder-assets --force
```

### Styling Issues

If you experience styling conflicts, make sure Filament's assets are loading correctly and there are no CSS conflicts with your custom styles.

### JavaScript Errors

Clear your browser cache and ensure Alpine.js is loaded (Filament includes it by default).

### Multiple Instances Issues

If you experience issues with multiple instances:

1. **Check console for errors** - Each instance should log its canvas ID if there are initialization issues
2. **Verify unique field names** - Each `LayoutBuilder::make()` should have a unique field name
3. **Keyboard shortcuts** - Shortcuts only work when an instance is focused (clicked on)
4. **History is instance-specific** - Each instance maintains its own undo/redo history

If problems persist, try using `wire:key` on parent components:

```php
Forms\Components\Section::make('Email Content')
    ->schema([
        LayoutBuilder::make('email_content'),
    ])
    ->key('email-content-section')
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Credits

- [Transistor](https://github.com/transistor)
- [Filament](https://filamentphp.com)

## Support

For issues, questions, or suggestions, please open an issue on GitHub.
