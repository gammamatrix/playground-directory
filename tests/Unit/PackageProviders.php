<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Unit\Playground\Directory;

/**
 * \Tests\Unit\Playground\Directory\PackageProviders
 */
trait PackageProviders
{
    protected string $package_providers_dir = __DIR__;

    protected function getPackageProviders($app)
    {
        return [
            \Playground\ServiceProvider::class,
            \Playground\Directory\ServiceProvider::class,
        ];
    }
}
