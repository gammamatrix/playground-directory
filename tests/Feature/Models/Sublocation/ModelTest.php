<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Directory\Models\Sublocation;

use Playground\Directory\Models\Location;
use Playground\Directory\Models\Sublocation;
use Playground\Directory\Models\SublocationRevision;
use Playground\Models\User;
use Tests\Feature\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Directory\Models\Sublocation\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Sublocation::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'revisions' => [
            'key' => 'sublocation_id',
            'modelClass' => SublocationRevision::class,
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
            'modelClass' => Sublocation::class,
        ],
        'location' => [
            'key' => 'location_id',
            'rule' => 'create',
            'modelClass' => Location::class,
        ],
    ];
}
