<?php

namespace Tajbir2000\MyFirstLaravelPackage\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Tajbir2000\MyFirstLaravelPackage\MyFirstLaravelPackageServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Tajbir2000\\MyFirstLaravelPackage\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            MyFirstLaravelPackageServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);


        include_once __DIR__.'/../database/migrations/create_my_first_laravel_package_table.php.stub';
        (new \CreateMyFirstLaravelPackageTable())->up();
    }
}
