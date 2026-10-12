<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Tests\Feature\Playground\Directory\Models\Contact;

use Playground\Directory\Models\Contact;
use Playground\Directory\Models\ContactRevision;
use Playground\Models\User;
use Tests\Feature\Playground\Directory\Models\ModelCase;

/**
 * \Tests\Feature\Playground\Directory\Models\Contact\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = Contact::class;

    protected bool $hasRelationships = true;

    protected array $hasMany = [
        'revisions' => [
            'key' => 'contact_id',
            'modelClass' => ContactRevision::class,
        ],
    ];

    protected array $hasOne = [
        'creator' => [
            'key' => 'created_by_id',
            'rule' => 'create',
            'modelClass' => User::class,
        ],
        'modifier' => [
            'key' => 'modified_by_id',
            'rule' => 'first',
            'modelClass' => User::class,
        ],
        'owner' => [
            'key' => 'owned_by_id',
            'rule' => 'first',
            'modelClass' => User::class,
        ],
        'parent' => [
            'key' => 'parent_id',
            'rule' => 'create',
            'modelClass' => Contact::class,
        ],
    ];
}
