<?php

namespace Ohmygodvt95\DKKDChecker\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ohmygodvt95\DKKDChecker\DKKDCheckerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Ohmygodvt95\\DKKDChecker\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            DKKDCheckerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_dkkd-checker_table.php.stub';
        $migration->up();
        */
    }
}
