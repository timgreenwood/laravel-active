Laravel Active
======
[![CircleCI](https://circleci.com/gh/timgreenwood/laravel-active/tree/main.svg?style=shield)](https://circleci.com/gh/timgreenwood/laravel-active/tree/main)
[![Latest Stable Version](https://poser.pugx.org/timgreenwood/laravel-active/v/stable.svg)](https://packagist.org/packages/timgreenwood/laravel-active)
[![Total Downloads](https://poser.pugx.org/timgreenwood/laravel-active/downloads.svg)](https://packagist.org/packages/timgreenwood/laravel-active)
[![License](https://poser.pugx.org/timgreenwood/laravel-active/license.svg)](https://packagist.org/packages/timgreenwood/laravel-active)

The helper class for Laravel applications to get active class.

Since version 9.0, the major version of this library will match the major version of Laravel.

| Laravel version | Active library version |
|-----------------|------------------------|
| 10.x            | 10.x                   |
| 9.x             | 9.x                    |

## Installation

Require this package as your dependencies:

```
composer require timgreenwood/laravel-active
```

Append this line to your `aliases` array in `config/app.php`

```php
'Active' => TimGreenwood\Active\Facades\Active::class,
```

## Changelog:

* v9.0: support Laravel 9
