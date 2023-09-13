<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://rawgithubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Colorlaravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.comlaravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shieldsio/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shieldsio/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shieldsio/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation
The first step is copy the .env.example to .env. Then we need download all package from composer with the command
```
composer install
```

Next, we need download livewireV3, type
```
composer require livewire/livewire^3.0
```
Next, we need generate the artisan key, type
```
php artisan key:generate
```
finally, run the migrations with the seeder(If you need test the app with data type --seed).
```
php artisan migrate --seed
```
