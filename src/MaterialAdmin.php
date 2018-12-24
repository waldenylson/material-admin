<?php

namespace MaterialAdmin;

use Illuminate\Support\ServiceProvider;

class MaterialAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'material');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->publishes([
            __DIR__.'/public/admin/assets' => public_path('vendor/admin/assets'),
        ], 'material/assets');
    }

    public function register()
    {

    }
}
