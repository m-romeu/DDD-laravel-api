<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BikeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(\Src\BikeCatalog\Bike\Application\GetBikeUseCase::class)
            ->needs(\Src\BikeCatalog\Bike\Domain\Contracts\BikeRepositoryContract::class)
            ->give(\Src\BikeCatalog\Bike\Infrastructure\Repositories\Eloquent\BikeRepository::class);
        $this->app->when(\Src\BikeCatalog\Bike\Application\GetAllBikesUseCase::class)
            ->needs(\Src\BikeCatalog\Bike\Domain\Contracts\BikeRepositoryContract::class)
            ->give(\Src\BikeCatalog\Bike\Infrastructure\Repositories\Eloquent\BikeRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}