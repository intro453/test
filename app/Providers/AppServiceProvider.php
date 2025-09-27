<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::pattern('id', '[0-9]+');

        //Model::preventLazyLoading(); //100 select вместо одного
        //Model::preventAccessingMissingAttributes(); // не существующие атрибуты в таблице
        //Model::preventSilentlyDiscardingAttributes(); // передача лишних данных не указанных в filliable
        Model::shouldBeStrict(); // врубаем сразу все 3 жестких защиты

    }
}
