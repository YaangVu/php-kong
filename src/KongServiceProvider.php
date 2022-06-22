<?php
/**
 * @Author yaangvu
 * @Date   Jun 14, 2022
 */

namespace Yaangvu\LaravelKong;

use Illuminate\Support\ServiceProvider;

class KongServiceProvider extends ServiceProvider
{
    public function register()
    {
        $configPath = __DIR__ . '/config/kong.php';
        $this->mergeConfigFrom($configPath, 'kong');

        $this->app->bind(Kong::class, function ($app) {
            return new Kong(config('kong.kong_url'), config('kong.kong_options'));
        });
    }
}