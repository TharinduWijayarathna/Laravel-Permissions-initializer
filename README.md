# Laravel Permission UI

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tharindu/laravel-permission-ui.svg?style=flat-square)](https://packagist.org/packages/tharindu/laravel-permission-ui)
[![Total Downloads](https://img.shields.io/packagist/dt/tharindu/laravel-permission-ui.svg?style=flat-square)](https://packagist.org/packages/tharindu/laravel-permission-ui)

A Laravel package to manage roles and permissions with UI implementation using Bootstrap 5.

## Installation

You can install the package via composer:

```bash
composer require tharindu/laravel-permission-ui
```

## Usage

### Generate Role Based Permissions UI

Run the following artisan command to generate the UI for role-based permissions:

```bash
php artisan permissions
```

### Set User Permissions UI

Run the following artisan command to generate the UI for setting user permissions:

```bash
php artisan permissions
```

## Publishing Views

If you want to customize the views, you can publish them using the following command:

```bash
php artisan vendor --tag=views
```


This will publish the views to the `resources/views/vendor/laravelpermissionui` directory.

## Example Views

- **Role Management View:** `resources/views/vendor/laravelpermissionui/roles.blade.php`
- **User Permissions View:** `resources/views/vendor/laravelpermissionui/permissions.blade.php`

## Contributing

Feel free to contribute by making a pull request or opening an issue.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.





