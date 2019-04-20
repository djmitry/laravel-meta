<?php

namespace Djmitry\Meta;

use Illuminate\Support\ServiceProvider;

class MetaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(base_path('vendor/djmitry/laravel-meta/src/views'), 'Meta');
    }
}