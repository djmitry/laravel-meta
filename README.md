## Laravel Form Generator
[![Latest Version on Packagist](https://img.shields.io/packagist/v/djmitry/laravel-meta.svg)](https://packagist.org/packages/djmitry/laravel-meta)
[![Software License](https://img.shields.io/packagist/l/djmitry/laravel-meta.svg)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/djmitry/laravel-meta.svg)](https://packagist.org/packages/djmitry/laravel-meta)

# Установка
```bash
$ composer require djmitry/laravel-meta:dev-master
```

# Использование
В шаблоне между тегами \<head\> добавить:
```bash
{!! Meta::show() !!}
```

В действии контроллера добавить теги:
```bash
Meta::add(['title' => 'Портфолио', 'description' => 'Мои работы']);
```