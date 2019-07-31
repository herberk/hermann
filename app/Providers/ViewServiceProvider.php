<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\MakeModelForm;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('view')->composer(
            ['juradas.partials._fields',
            'empresas.partials._fields',
            'empresas.bancos.newbancos',
            'juradas.partials._updateestado',
             'archivos.partials.filefields' ,
              'shared._modal-sm'  ],
            MakeModelForm::class
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
