<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Directory\Models\Tagged;

use Playground\Directory\Models\Contact;
use Playground\Directory\Models\Location;
use Playground\Directory\Models\Tag;
use Playground\Directory\Models\Tagged;
use Playground\Models\User;
use Tests\Feature\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Directory\Models\Tagged\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Tagged::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => User::class,
        ],
        'tag' => [
            'key' => 'tag_id',
            'rule' => 'create',
            'modelClass' => Tag::class,
        ],
        'contact' => [
            'key' => 'contact_id',
            'rule' => 'create',
            'modelClass' => Contact::class,
        ],
        'location' => [
            'key' => 'location_id',
            'rule' => 'create',
            'modelClass' => Location::class,
        ],
    ];
}
