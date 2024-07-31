# Playground: Directory

[![Playground CI Workflow](https://github.com/gammamatrix/playground-directory/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/playground-directory/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/playground-directory/testing/develop/coverage.svg)](tests)
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-level%209-brightgreen)](.github/workflows/ci.yml#L120)

The Playground: Directory package.

## Installation

You can install the package via composer:

```bash
composer require gammamatrix/playground-directory
```

## Configuration

All options are disabled by default.

See the contents of the published config file: [config/playground-directory.php](config/playground-directory.php)


## Cloc

```sh
composer cloc
```

```
➜  playground-directory git:(develop) ✗ composer cloc
> cloc --exclude-dir=node_modules,output,vendor .
      41 text files.
      31 unique files.
      11 files ignored.

github.com/AlDanial/cloc v 1.98  T=0.07 s (436.0 files/s, 100552.5 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
JSON                             4              0              0           4798
PHP                             19            156            435           1191
YAML                             1              5              0            275
XML                              3              0              7            215
Markdown                         3             18              0             35
INI                              1              3              0             12
-------------------------------------------------------------------------------
SUM:                            31            182            442           6526
-------------------------------------------------------------------------------
```

## PHPStan

Tests at level 9 on:
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

```sh
composer test --parallel
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
