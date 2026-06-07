<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Directory\Models\Location;

use Playground\Directory\Models\Location;
use Playground\Directory\Models\LocationRevision;
use Playground\Directory\Models\Sublocation;
use Playground\Models\User;
use Tests\Feature\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Directory\Models\Location\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Location::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'revisions' => [
            'key' => 'location_id',
            'modelClass' => LocationRevision::class,
        ],
        'sublocations' => [
            'key' => 'location_id',
            'modelClass' => Sublocation::class,
        ],
    ];

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'first',
            'modelClass' => User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'first',
            'modelClass' => User::class,
        ],
        'parent' => [
            'key' => 'parent_id',
            'rule' => 'create',
            'modelClass' => Location::class,
        ],
    ];
}
