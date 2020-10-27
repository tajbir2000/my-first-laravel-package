<?php

namespace Tajbir2000\MyFirstLaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tajbir2000\MyFirstLaravelPackage\MyFirstLaravelPackage
 */
class MyFirstLaravelPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'my-first-laravel-package';
    }
}
