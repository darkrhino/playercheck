<?php
namespace PC\GEO;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use WC\Sites\Site;

class Counties extends Model
{
    use Sluggable, SluggableScopeHelpers;

    protected $table = 'counties';

    protected $fillable = [
        'name', 'slug'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function sites()
    {
        return $this->hasMany(Site::class, 'county_id');
    }
}