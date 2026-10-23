<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Directory\Models\Tag;

use Playground\Directory\Models\Tag;
use Tests\Unit\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Directory\Models\Tag\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Tag::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
    ];
}
