<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Playground\Directory;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider;

/**
 * \Playground\Directory\ServiceProvider
 */
class ServiceProvider extends AuthServiceProvider
{
    public const VERSION = '73.0.0';

    public string $package = 'playground-directory';

    /**
     * Bootstrap any package services.
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * @var array<string, mixed> $config
         */
        $config = config($this->package);

        if (! empty($config['load']) && is_array($config['load'])) {

            if ($this->app->runningInConsole()) {
                // Publish configuration
                $this->publishes([
                    sprintf('%1$s/config/%2$s.php', dirname(__DIR__), $this->package) => config_path(sprintf('%1$s.php', $this->package)),
                ], 'playground-config');

                // Publish migrations
                $this->publishMigrations();

                // Load migrations
                if (! empty($config['load']['migrations'])) {
                    $this->loadMigrationsFrom(dirname(__DIR__).'/database/migrations');
                }
            }
        }

        if (! empty($config['about'])) {
            $this->about();
        }
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            dirname(__DIR__).'/config/playground-directory.php',
            $this->package
        );
    }

    public function publishMigrations(): void
    {
        $migrations = [];

        foreach ([
            '2024_07_31_000000_create_directory_locations_table.php',
            '2024_07_31_000000_create_directory_location_revisions_table.php',
            '2024_07_31_000000_create_directory_sublocations_table.php',
            '2024_07_31_000000_create_directory_sublocation_revisions_table.php',
        ] as $file) {
            $migrations[dirname(__DIR__).'/database/migrations/'.$file] = database_path('migrations/'.$file);
        }

        $this->publishes($migrations, 'playground-migrations');
    }

    public function about(): void
    {
        $config = config($this->package);
        $config = is_array($config) ? $config : [];

        $load = ! empty($config['load']) && is_array($config['load']) ? $config['load'] : [];

        AboutCommand::add('Playground: Directory', fn () => [
            '<fg=yellow;options=bold>Load</> Migrations' => ! empty($load['migrations']) ? '<fg=green;options=bold>ENABLED</>' : '<fg=yellow;options=bold>DISABLED</>',
            'Package' => $this->package,
            'Version' => ServiceProvider::VERSION,
        ]);
    }
}
