<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Feature\Playground\Directory;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Playground\Test\OrchestraTestCase;
use Tests\Unit\Playground\Directory\PackageProviders;

/**
 * \Tests\Feature\Playground\Directory\TestCase
 */
class TestCase extends OrchestraTestCase
{
    use DatabaseTransactions;
    use PackageProviders;

    protected bool $hasMigrations = true;

    protected bool $load_migrations_laravel = false;

    protected bool $load_migrations_package = true;

    protected bool $load_migrations_playground = true;

    protected bool $setUpUserForPlayground = true;
}
