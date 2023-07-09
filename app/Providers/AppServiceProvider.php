<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('hora', function ($attribute, $value, $parameters, $validator) {
            // Aquí puedes definir tu lógica de validación personalizada para la hora
            // Puedes utilizar la función PHP strtotime() o DateTime para validar el formato de la hora
        
            // Devuelve true si el valor es válido, o false si no lo es
            return true;
        });
    }
}
