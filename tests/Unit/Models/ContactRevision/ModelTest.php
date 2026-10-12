<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Unit\Playground\Directory\Models\ContactRevision;

use Playground\Directory\Models\ContactRevision;
use Tests\Unit\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Directory\Models\ContactRevision\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = ContactRevision::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'contact',
    ];
}
