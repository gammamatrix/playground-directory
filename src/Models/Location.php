<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Playground\Directory\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Playground\Models\Model;

/**
 * \Playground\Directory\Models\Location
 *
 * @property string $id
 * @property ?scalar $created_by_id
 * @property ?scalar $modified_by_id
 * @property ?scalar $owned_by_id
 * @property ?string $parent_id
 * @property ?string $location_type
 * @property ?string $matrix_id
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 * @property ?Carbon $deleted_at
 * @property ?Carbon $start_at
 * @property ?Carbon $planned_start_at
 * @property ?Carbon $end_at
 * @property ?Carbon $planned_end_at
 * @property ?Carbon $canceled_at
 * @property ?Carbon $closed_at
 * @property ?Carbon $embargo_at
 * @property ?Carbon $postponed_at
 * @property ?Carbon $resumed_at
 * @property ?Carbon $suspended_at
 * @property int $gids
 * @property int $po
 * @property int $pg
 * @property int $pw
 * @property bool $only_admin
 * @property bool $only_user
 * @property bool $only_guest
 * @property bool $allow_public
 * @property int $status
 * @property int $rank
 * @property int $size
 * @property ?array $matrix
 * @property ?int $x
 * @property ?int $y
 * @property ?int $z
 * @property ?double $r
 * @property ?double $theta
 * @property ?double $rho
 * @property ?double $phi
 * @property ?double $elevation
 * @property ?double $latitude
 * @property ?double $longitude
 * @property bool $active
 * @property bool $canceled
 * @property bool $closed
 * @property bool $completed
 * @property bool $cron
 * @property bool $flagged
 * @property bool $internal
 * @property bool $locked
 * @property bool $pending
 * @property bool $planned
 * @property bool $prioritized
 * @property bool $problem
 * @property bool $retired
 * @property bool $suspended
 * @property bool $unknown
 * @property string $label
 * @property string $title
 * @property string $byline
 * @property ?string $slug
 * @property string $url
 * @property string $description
 * @property string $introduction
 * @property ?string $content
 * @property ?string $summary
 * @property string $icon
 * @property string $image
 * @property string $avatar
 * @property ?array $ui
 * @property ?array $address
 * @property ?array $assets
 * @property ?array $contact
 * @property ?array $meta
 * @property ?array $notes
 * @property ?array $options
 * @property ?array $sources
 */
class Location extends Model
{
    protected $table = 'directory_locations';

    /**
     * The default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        'created_by_id' => null,
        'modified_by_id' => null,
        'owned_by_id' => null,
        'parent_id' => null,
        'location_type' => null,
        'matrix_id' => null,
        'start_at' => null,
        'planned_start_at' => null,
        'end_at' => null,
        'planned_end_at' => null,
        'canceled_at' => null,
        'closed_at' => null,
        'embargo_at' => null,
        'postponed_at' => null,
        'resumed_at' => null,
        'suspended_at' => null,
        'gids' => 0,
        'po' => 0,
        'pg' => 0,
        'pw' => 0,
        'only_admin' => false,
        'only_user' => false,
        'only_guest' => false,
        'allow_public' => false,
        'status' => 0,
        'rank' => 0,
        'size' => 0,
        'matrix' => '{}',
        'x' => null,
        'y' => null,
        'z' => null,
        'r' => null,
        'theta' => null,
        'rho' => null,
        'phi' => null,
        'elevation' => null,
        'latitude' => null,
        'longitude' => null,
        'active' => true,
        'canceled' => false,
        'closed' => false,
        'completed' => false,
        'cron' => false,
        'flagged' => false,
        'internal' => false,
        'locked' => false,
        'pending' => false,
        'planned' => false,
        'prioritized' => false,
        'problem' => false,
        'retired' => false,
        'suspended' => false,
        'unknown' => false,
        'label' => '',
        'title' => '',
        'byline' => '',
        'slug' => null,
        'url' => '',
        'description' => '',
        'introduction' => '',
        'content' => null,
        'summary' => null,
        'icon' => '',
        'image' => '',
        'avatar' => '',
        'ui' => '{}',
        'address' => '{}',
        'assets' => '{}',
        'contact' => '{}',
        'meta' => '{}',
        'notes' => '[]',
        'options' => '{}',
        'sources' => '{}',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'owned_by_id',
        'parent_id',
        'location_type',
        'matrix_id',
        'start_at',
        'planned_start_at',
        'end_at',
        'planned_end_at',
        'canceled_at',
        'closed_at',
        'embargo_at',
        'postponed_at',
        'resumed_at',
        'suspended_at',
        'gids',
        'po',
        'pg',
        'pw',
        'only_admin',
        'only_user',
        'only_guest',
        'allow_public',
        'status',
        'rank',
        'size',
        'matrix',
        'x',
        'y',
        'z',
        'r',
        'theta',
        'rho',
        'phi',
        'elevation',
        'latitude',
        'longitude',
        'active',
        'canceled',
        'closed',
        'completed',
        'cron',
        'flagged',
        'internal',
        'locked',
        'pending',
        'planned',
        'prioritized',
        'problem',
        'retired',
        'suspended',
        'unknown',
        'label',
        'title',
        'byline',
        'slug',
        'url',
        'description',
        'introduction',
        'content',
        'summary',
        'icon',
        'image',
        'avatar',
        'ui',
        'address',
        'assets',
        'contact',
        'meta',
        'options',
        'sources',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'location_type' => 'string',
            'start_at' => 'datetime',
            'planned_start_at' => 'datetime',
            'end_at' => 'datetime',
            'planned_end_at' => 'datetime',
            'canceled_at' => 'datetime',
            'closed_at' => 'datetime',
            'embargo_at' => 'datetime',
            'postponed_at' => 'datetime',
            'resumed_at' => 'datetime',
            'suspended_at' => 'datetime',
            'gids' => 'integer',
            'po' => 'integer',
            'pg' => 'integer',
            'pw' => 'integer',
            'only_admin' => 'boolean',
            'only_user' => 'boolean',
            'only_guest' => 'boolean',
            'allow_public' => 'boolean',
            'status' => 'integer',
            'rank' => 'integer',
            'size' => 'integer',
            'matrix' => 'array',
            'x' => 'integer',
            'y' => 'integer',
            'z' => 'integer',
            'r' => 'float',
            'theta' => 'float',
            'rho' => 'float',
            'phi' => 'float',
            'elevation' => 'float',
            'latitude' => 'float',
            'longitude' => 'float',
            'active' => 'boolean',
            'canceled' => 'boolean',
            'closed' => 'boolean',
            'completed' => 'boolean',
            'cron' => 'boolean',
            'flagged' => 'boolean',
            'internal' => 'boolean',
            'locked' => 'boolean',
            'pending' => 'boolean',
            'planned' => 'boolean',
            'prioritized' => 'boolean',
            'problem' => 'boolean',
            'retired' => 'boolean',
            'suspended' => 'boolean',
            'unknown' => 'boolean',
            'label' => 'string',
            'title' => 'string',
            'byline' => 'string',
            'slug' => 'string',
            'url' => 'string',
            'description' => 'string',
            'introduction' => 'string',
            'content' => 'string',
            'summary' => 'string',
            'icon' => 'string',
            'image' => 'string',
            'avatar' => 'string',
            'ui' => 'array',
            'address' => 'array',
            'assets' => 'array',
            'contact' => 'array',
            'meta' => 'array',
            'notes' => 'array',
            'options' => 'array',
            'sources' => 'array',
        ];
    }

    /**
     * The sublocations of the location.
     *
     * @return HasMany<Sublocation>
     */
    public function sublocations(): HasMany
    {
        return $this->hasMany(
            Sublocation::class,
            'location_id',
            'id'
        );
    }
}
