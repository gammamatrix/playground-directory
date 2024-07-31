<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Unit\Playground\Directory\Sublocation;

use Tests\Unit\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Directory\Sublocation\InstanceTest
 */
class InstanceTest extends ModelCase
{
    protected string $modelClass = \Playground\Directory\Models\Sublocation::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        // 'revisions',
    ];

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'location',
    ];
}
