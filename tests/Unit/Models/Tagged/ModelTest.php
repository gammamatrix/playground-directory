<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Directory\Models\Tagged;

use Playground\Directory\Models\Tagged;
use Tests\Unit\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Directory\Models\Tagged\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Tagged::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'tag',
        'contact',
        'location',
    ];
}
