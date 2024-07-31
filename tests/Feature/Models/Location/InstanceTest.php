<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Feature\Playground\Directory\Location;

use Tests\Feature\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Directory\Location\InstanceTest
 */
class InstanceTest extends ModelCase
{
    protected string $modelClass = \Playground\Directory\Models\Location::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        // 'revisions' => ['key' => 'location_id', 'modelClass' => \Playground\Directory\Models\LocationRevision::class],
        'sublocations' => ['key' => 'location_id', 'modelClass' => \Playground\Directory\Models\Sublocation::class],
    ];

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => \Playground\Models\User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'first',
            'modelClass' => \Playground\Models\User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'first',
            'modelClass' => \Playground\Models\User::class,
        ],
        'parent' => [
            'key' => 'parent_id',
            'rule' => 'create',
            'modelClass' => \Playground\Directory\Models\Location::class,
        ],
    ];
}
