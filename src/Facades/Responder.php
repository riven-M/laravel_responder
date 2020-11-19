<?php
/**
 * Created by phpStorm
 * @Date:2020/11/19
 * @Time:13:49
 * @Author:Riven
 */

namespace riven\Responder\Facades;
use Illuminate\Support\Facades\Facade;

class Responder extends Facade
{
    protected static function getFacadeAccessor() {
        return 'riven\Responder\Services\Responder';
    }
}