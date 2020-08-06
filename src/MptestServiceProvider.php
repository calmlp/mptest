<?php

namespace Calmlp\Mptest;

use Illuminate\Support\ServiceProvider;

class MptestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
        // 单例绑定服务
        $this->app->singleton('mptest', function () {
            return new Mptest(config('mptest'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
          __DIR__.'/config/mptest.php' => config_path('mptest.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }
}
