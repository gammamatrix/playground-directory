<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Tests\Unit\Playground\Directory\Location;

use Tests\Unit\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Directory\Location\InstanceTest
 */
class InstanceTest extends ModelCase
{
    protected string $modelClass = \Playground\Directory\Models\Location::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        // 'revisions',
        'sublocations',
    ];

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
    ];
}
