<?php

namespace NiclasTimm\Feedbeggar;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use NiclasTimm\Feedbeggar\Commands\FeedbeggarCommand;

class FeedbeggarServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-feedbeggar')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_feedbeggar_table')
            ->hasCommand(FeedbeggarCommand::class);
    }
}
