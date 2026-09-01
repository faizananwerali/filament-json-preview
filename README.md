# Filament JSON Preview

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ahmedabdelaal/filament-json-preview.svg?style=flat-square)](https://packagist.org/packages/ahmedabdelaal/filament-json-preview)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

This package seamlessly integrates the powerful [JSONEditor](https://github.com/josdejong/jsoneditor) library into Filament Infolists, enabling developers to easily incorporate interactive, formatted JSON previews into their Filament projects.

Compatible with **Filament v3, v4, and v5**, **Laravel 10, 11, and 12**, and **PHP 8.2+**.

---

## Installation

![Screenshot](https://raw.githubusercontent.com/ahmedabdel3al/filament-json-preview/main/images/img.png)

You can install the package via Composer:

```bash
composer require ahmedabdelaal/filament-json-preview
```

Publish the SVG icons required by the JSON editor:

```bash
php artisan vendor:publish --tag=jsoneditor
```

---

## Usage

Use `JsonPreview` inside your Filament Infolists schema:

```php
use AhmedAbdelaal\FilamentJsonPreview\JsonPreview;
use Filament\Infolists\Infolist;

public static function infolist(Infolist $infolist): Infolist
{
    return $infolist->schema([
        JsonPreview::make('properties')
            ->label('JSON Details'),
    ]);
}
```

### Enable Search in JSON

```php
JsonPreview::make('properties')
    ->searchable();
```

### Show Navigation Bar in JSON

```php
JsonPreview::make('properties')
    ->showNavigationBar();
```

### Custom JSONEditor Options

```php
JsonPreview::make('properties')
    ->withOptions([
        'mode' => 'view',
        'mainMenuBar' => true,
    ]);
```

---

## Features & Customization

- **Collapsible Nodes**: Expand and collapse JSON structures dynamically.
- **Searchable**: Search through keys and values seamlessly.
- **Navigation Bar**: Enables path navigation for complex nested JSON.

---

## Contributing

Contributions are welcome! Feel free to submit a pull request or create an issue.

## Credits

- [Ahmed Abdelaal](https://github.com/ahmedabdel3al)
- [Faizan Anwer Ali](https://github.com/faizananwerali)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
