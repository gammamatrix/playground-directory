<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Directory\Models\Location;

use Playground\Directory\Models\Location;
use Tests\Unit\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Directory\Models\Location\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Location::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'revisions',
        'sublocations',
    ];

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
    ];
}
