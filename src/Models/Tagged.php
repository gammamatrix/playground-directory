<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Playground\Directory\Models;

use Database\Factories\Playground\Directory\Models\TaggedFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;
use Playground\Models\User;
use Playground\Models\UuidModel;

/**
 * \Playground\Directory\Models\Tagged
 *
 * @property string $id
 * @property ?scalar $created_by_id
 * @property ?string $tag_id
 * @property ?string $location_id
 * @property ?string $contact_id
 * @property ?Carbon $created_at
 */
class Tagged extends UuidModel
{
    const UPDATED_AT = null;

    /** @use HasFactory<TaggedFactory> */
    use HasFactory;

    protected $table = 'directory_tagged';

    protected $attributes = [
        'created_by_id' => null,
        'tag_id' => null,
        'location_id' => null,
        'contact_id' => null,
        'created_at' => null,
    ];

    protected $fillable = [
        'tag_id',
        'location_id',
        'contact_id',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
        ];
    }

    /**
     * The creator.
     *
     * @return HasOne<User, $this>
     */
    public function creator(): HasOne
    {
        return $this->hasOne(
            User::class,
            'id',
            'created_by_id'
        );
    }

    /**
     * The tag.
     *
     * @return HasOne<Tag, $this>
     */
    public function tag(): HasOne
    {
        return $this->hasOne(
            Tag::class,
            'id',
            'tag_id'
        );
    }

    /**
     * The tagged contact.
     *
     * @return HasOne<Contact, $this>
     */
    public function contact(): HasOne
    {
        return $this->hasOne(
            Contact::class,
            'id',
            'contact_id'
        );
    }

    /**
     * The tagged location.
     *
     * @return HasOne<Location, $this>
     */
    public function location(): HasOne
    {
        return $this->hasOne(
            Location::class,
            'id',
            'location_id'
        );
    }
}
