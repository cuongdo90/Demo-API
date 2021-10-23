<?php

namespace App\Providers;


use App\Http\Repositories\ProductRepository;
use App\Http\Repositories\Impl\ProductRepositoryImpl;
use App\Http\Services\ProductService;
use App\Http\Services\Impl\ProductServiceImpl;
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
