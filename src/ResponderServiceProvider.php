<?php
/**
 * Created by phpStorm
 * @Date:2020/11/19
 * @Time:13:53
 * @Author:Riven
 */

namespace riven\Responder;

use Illuminate\Support\ServiceProvider;
use riven\Responder\Services\Responder;


class ResponderServiceProvider extends  ServiceProvider
{
    public function register() {
        $this->app->singleton('Responder', function () {
            return new Responder(config("responder"));
        });
    }

    public function boot() {
        $this->publishes([
            __DIR__ . '/Config/Responder.php' => config_path('responder.php'),
        ]);
    }
}