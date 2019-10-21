<?php

namespace Rlunar\LaravelRedis;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rlunar\LaravelRedis\Skeleton\SkeletonClass
 */
class LaravelRedisFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-redis';
    }
}
