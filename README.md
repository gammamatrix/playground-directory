# Playground: Directory

[![Playground CI Workflow](https://github.com/gammamatrix/playground-directory/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/playground-directory/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/playground-directory/testing/develop/coverage.svg)](tests)
[![PHPStan Level 10](https://img.shields.io/badge/PHPStan-level%2010-brightgreen)](.github/workflows/ci.yml#L128)

The Playground Directory is a package for [Laravel](https://laravel.com/docs/12.x) applications.

Playground: Provides the Directory models for the Playground Directory System.

Read more on using [Playground: Directory at Read the Docs](https://gammamatrix-playground.readthedocs.io/en/develop/built-components/directory.html)

## Installation

**NOTE:** This package is required by:
- [Playground: Directory API](https://github.com/gammamatrix/playground-directory-api): API without UI
- [Playground: Directory Resource](https://github.com/gammamatrix/playground-directory-resource): API with UI

Install this package, with composer, to get access to the Directory Models:

```shell
composer require gammamatrix/playground-directory
```

## `artisan:about`

Playground Directory provides information in the `artisan about` command.

<img src="resources/docs/artisan-about-playground-directory.png" alt="screenshot of artisan about command with Playground: Directory.">

## Configuration

Migrations are disabled by default. This package may sometimes be installed where another system handles the migrations.

See the contents of the published config file: [config/playground-directory.php](config/playground-directory.php)

You can publish the config file with:
```shell
php artisan vendor:publish --provider="Playground\Directory\ServiceProvider" --tag="playground-config"
```

### Environment Variables

| env()                                  | config()                               | Default |
|----------------------------------------|----------------------------------------|---------|
| `PLAYGROUND_DIRECTORY_ABOUT`           | `playground-directory.about`           | `true`  |
| `PLAYGROUND_DIRECTORY_LOAD_MIGRATIONS` | `playground-directory.load.migrations` | `false` |
- The loading option for migrations does not take effect if the migrations have been exported to your app. The control for loading is handled in the package [ServiceProvider.](src/ServiceProvider.php)

## Models

This package includes [factories](database/factories), models and [migrations](database/migrations) for:
- [Contact](src/Models/Contact.php)
- [ContactRevision](src/Models/ContactRevision.php)
- [Location](src/Models/Location.php)
- [LocationRevision](src/Models/LocationRevision.php)
- [Tag](src/Models/Tag.php)
- [Tagged](src/Models/Tagged.php)

## Migrations

All migrations are disabled by default.

See the contents of the published config file: [database/migrations](database/migrations)
- NOTE: There are 6 tables that will be created, they do have indexes and unique constraints defined; however, this release does not have the foreign key constraint migrations included at this time.

You can publish the migrations file with:
```shell
php artisan vendor:publish --provider="Playground\Directory\ServiceProvider" --tag="playground-migrations"
```

## Cloc

```shell
composer cloc
```

```terminaloutput
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
JSON                            39              0              0          15484
PHP                             39            432            969           2749
XML                              3              0              7            215
YAML                             1              4              0            187
Markdown                         3             45              0            105
INI                              1              3              0             12
-------------------------------------------------------------------------------
SUM:                            86            484            976          18752
-------------------------------------------------------------------------------
```

## PHPStan

Tests at level 10 on:
- `config/`
- `database/`
- `src/`
- `tests/Feature/`
- `tests/Unit/`

```shell
composer analyse
```

## Coding Standards

```shell
composer format
```

## Testing

Unit tests
```shell
composer test
```

Unit and feature tests
```shell
composer test-dev
```

Run unit and feature tests in parallel:
```shell
composer test-parallel
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Jeremy Postlethwaite](https://github.com/gammamatrix)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
