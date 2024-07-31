<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Feature\Playground\Directory\Models\Sublocation;

use Tests\Feature\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Directory\Models\Sublocation\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Directory\Models\Sublocation::class;

    protected bool $hasRelationships = true;

    /**
     * @var array<string, array<string, mixed>> Test has many relationships.
     */
    protected array $hasMany = [
    ];

    /**
     * @var array<string, array<string, mixed>> Test has one relationships.
     */
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
            'modelClass' => \Playground\Directory\Models\Sublocation::class,
        ],
        'location' => [
            'key' => 'location_id',
            'rule' => 'create',
            'modelClass' => \Playground\Directory\Models\Location::class,
        ],
    ];
}
