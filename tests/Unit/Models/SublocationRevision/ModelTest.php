<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Directory\Models\SublocationRevision;

use Playground\Directory\Models\SublocationRevision;
use Tests\Unit\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Directory\Models\SublocationRevision\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = SublocationRevision::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'sublocation',
        'location',
    ];
}
