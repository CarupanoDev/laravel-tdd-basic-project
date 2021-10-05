<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Tag\Domain\Interfaces\TagRepositoryInterface;
use Src\Tag\Infrastructure\Repository\EloquentTagRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            TagRepositoryInterface::class,
            EloquentTagRepository::class
        );
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
