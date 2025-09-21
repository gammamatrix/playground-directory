# Playground: Directory

[![Playground CI Workflow](https://github.com/gammamatrix/playground-directory/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/playground-directory/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/playground-directory/testing/develop/coverage.svg)](tests)
[![PHPStan Level 10](https://img.shields.io/badge/PHPStan-level%2010-brightgreen)](.github/workflows/ci.yml#L128)

The Playground Directory is a package for [Laravel](https://laravel.com/docs/12.x) applications.

Playground: Provide the Directory models for the Playground Directory System.

Read more on using [Playground: Directory at Read the Docs](https://gammamatrix-playground.readthedocs.io/en/develop/built-components/directory.html)

## Installation

**NOTE:** This package is required by:
- [Playground: Directory API](https://github.com/gammamatrix/playground-directory-api): API without UI
- [Playground: Directory Resource](https://github.com/gammamatrix/playground-directory-resource): API with UI

Install this package, with composer, to get access to the Directory Models:

```bash
composer require gammamatrix/playground-directory
```

## `artisan:about`

Playground Directory provides information in the `artisan about` command.

[//]: # (<img src="resources/docs/artisan-about-playground-directory.png" alt="screenshot of artisan about command with Playground: Directory.">)

## Configuration

Migrations are disabled by default. This package may sometimes be installed where another system handles the migrations.

See the contents of the published config file: [config/playground-directory.php](config/playground-directory.php)

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Playground\Directory\ServiceProvider" --tag="playground-config"
```

### Environment Variables

| env()                                | config()                         | Default |
|--------------------------------------|----------------------------------|---------|
| `PLAYGROUND_DIRECTORY_ABOUT`           | `playground-directory.about`           | `true`  |
| `PLAYGROUND_DIRECTORY_LOAD_MIGRATIONS` | `playground-directory.load.migrations` | `false` |
- The loading option for migrations does not take effect if the migrations have been exported to your app. The control for loading is handled in the package [ServiceProvider.](src/ServiceProvider.php)

## Models

This package includes [factories](database/factories), models and [migrations](database/migrations) for:
- [Location](src/Models/Location.php)
- [LocationRevision](src/Models/LocationRevision.php)
- [Sublocation](src/Models/Sublocation.php)
- [SublocationRevision](src/Models/SublocationRevision.php)

## Migrations

All migrations are disabled by default.

See the contents of the published config file: [database/migrations](database/migrations)
- NOTE: There are 4 tables that will be created, they do have indexes and unique constraints defined; however, this release does not have the foreign key constraint migrations included at this time.

You can publish the migrations file with:
```bash
php artisan vendor:publish --provider="Playground\Directory\ServiceProvider" --tag="playground-migrations"
```

## Cloc

```sh
composer cloc
```

```
➜  playground-directory git:(develop) ✗ composer cloc
      77 text files.
      72 unique files.
       6 files ignored.

github.com/AlDanial/cloc v 2.06  T=0.04 s (2005.9 files/s, 441010.1 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
JSON                            29              0              0          11866
PHP                             28            320            742           2130
XML                             10              0              7            304
YAML                             1              5              0            275
Markdown                         3             46              0            120
INI                              1              3              0             12
-------------------------------------------------------------------------------
SUM:                            72            374            749          14707
-------------------------------------------------------------------------------
```

## PHPStan

Tests at level 10 on:
- `config/`
- `database/`
- `src/`
- `tests/Feature/`
- `tests/Unit/`

```sh
composer analyse
```

## Coding Standards

```sh
composer format
```

## Testing

Unit tests
```sh
composer test
```

Unit and feature tests
```sh
composer test-dev
```

Run unit and feature tests in parallel:
```sh
composer test-parallel
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Jeremy Postlethwaite](https://github.com/gammamatrix)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
