# This is my first laravel package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tajbir2000/my-first-laravel-package.svg?style=flat-square)](https://packagist.org/packages/tajbir2000/my-first-laravel-package)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/tajbir2000/my-first-laravel-package/run-tests?label=tests)](https://github.com/tajbir2000/my-first-laravel-package/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/tajbir2000/my-first-laravel-package.svg?style=flat-square)](https://packagist.org/packages/tajbir2000/my-first-laravel-package)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require tajbir2000/my-first-laravel-package
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Tajbir2000\MyFirstLaravelPackage\MyFirstLaravelPackageServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Tajbir2000\MyFirstLaravelPackage\MyFirstLaravelPackageServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$my-first-laravel-package = new Tajbir2000\MyFirstLaravelPackage();
echo $my-first-laravel-package->echoPhrase('Hello, Tajbir2000!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Imdadul Haque](https://github.com/tajbir2000)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
