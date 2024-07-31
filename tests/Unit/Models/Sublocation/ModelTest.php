<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Unit\Tests\Feature\Playground\Directory\Models\Sublocation;

use Tests\Unit\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Unit\Tests\Feature\Playground\Directory\Models\Sublocation\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Directory\Models\Sublocation::class;

    protected bool $hasRelationships = true;

    /**
     * @var array<int, string> Test has many relationships.
     */
    protected array $hasMany = [
    ];

    /**
     * @var array<int, string> Test has one relationships.
     */
    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'location',
    ];
}
