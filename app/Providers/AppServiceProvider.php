<?php

namespace App\Providers;

use ConsoleTVs\Charts\Registrar as Charts;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
    public function boot(Charts $charts)
    {
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        $charts->register([
            \App\Charts\SampleChart::class,
            \App\Charts\FamillesEquipementsChart::class,
            \App\Charts\EquipementsChart::class
        ]);
    }
}
