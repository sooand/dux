# Dux is a UI package on top of filamentphp to configure, forms, tables etc. through a UI instead of PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sooand/dux.svg?style=flat-square)](https://packagist.org/packages/sooand/dux)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/sooand/dux/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sooand/dux/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sooand/dux/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/sooand/dux/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sooand/dux.svg?style=flat-square)](https://packagist.org/packages/sooand/dux)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require sooand/dux
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="dux-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="dux-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="dux-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$dux = new Sooand\Dux();
echo $dux->echoPhrase('Hello, Sooand!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Søren Risbøll Frisk](https://github.com/sooand)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
