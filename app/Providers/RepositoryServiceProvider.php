<?php

namespace App\Providers;

use App\Repositories\Menu\MenuRepositoryEloquent;
use App\Repositories\Menu\MenuRepositoryInterface;
use App\Repositories\Beauty\BeautyRepositoryEloquent;
use App\Repositories\Beauty\BeautyRepositoryInterface;
use App\Repositories\User\UserRepositoryEloquent;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        MenuRepositoryInterface::class => MenuRepositoryEloquent::class,
        UserRepositoryInterface::class => UserRepositoryEloquent::class,
        BeautyRepositoryInterface::class => BeautyRepositoryEloquent::class,
    ];

    /**
     * Register services.
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $eloquent) {
            $this->app->singleton($interface, $eloquent);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
    }
}
