# Programic - Laravel Nexudus

[![Latest Version on Packagist](https://img.shields.io/packagist/v/programic/laravel-nexudus.svg?style=flat-square)](https://packagist.org/packages/programic/laravel-nexudus)
[![Tests](https://github.com/programic/laravel-nexudus/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/programic/laravel-nexudus/actions/workflows/tests.yml)
![](https://github.com/programic/laravel-nexudus/workflows/Run%20Tests/badge.svg?branch=main)
[![Total Downloads](https://img.shields.io/packagist/dt/programic/laravel-nexudus.svg?style=flat-square)](https://packagist.org/packages/programic/laravel-nexudus)

This package is a Laravel extension

## Installation
This package requires PHP 8.0 and Laravel 8.0 or higher.

```
composer require programic/laravel-nexudus
```

Add Nexudus credentials to your services config and .env:
```php
'nexudus' => [
    'authentication' => env('NEXUDUS_AUTH', 'basic'),
    'username' => env('NEXUDUS_USERNAME'),
    'password' => env('NEXUDUS_PASSWORD'),
],
```

## Usage



## Testing
```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security-related issues, please email [info@programic.com](mailto:info@programic.com) instead of using the issue tracker.

## Credits

- [Rick Bongers](https://github.com/rbongers)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
