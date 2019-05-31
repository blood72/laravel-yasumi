# Yasumi for Laravel 5

[Yasumi](https://github.com/azuyalabs/yasumi) is an easy PHP Library for calculating national holidays.

It is the purpose of this package to help Yasumi be optimized for Laravel.


## Requirement

- PHP >= 7.1.3
- Laravel 5.4+


## Installation

Install using the composer.
```bash
composer require blood72/laravel-yasumi
```

##### Additional work required below Laravel 5.4 or Auto-Discovery is disabled.

add the service provider to the `providers` array in `config/app.php`.
```php
'providers' => [
    // ...
    Blood72\Yasumi\YasumiServiceProvider::class,
],
```

also add this to the `aliases` array.
```php
'aliases' => [
    // ...
    'Yasumi' => \Blood72\Yasumi\YasumiFacade::class,
],
```


## Usage

see the [document](https://azuyalabs.github.io/yasumi/) provided by Yasumi.


## License

This package is open-sourced software licensed under the MIT license.
