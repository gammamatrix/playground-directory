<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Directory\Models\LocationRevision;

use Playground\Directory\Models\LocationRevision;
use Tests\Unit\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Directory\Models\LocationRevision\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = LocationRevision::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'location',
    ];
}
