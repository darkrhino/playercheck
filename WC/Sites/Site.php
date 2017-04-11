<?php
namespace WC\Sites;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use Sluggable, SluggableScopeHelpers;

    protected $connection = 'weaponcrates';

    protected $table = 'sites';

    protected $fillable = [
        'name', 'tagline', 'county_id', 'creator_id', 'description', 'website', 'facebook',
        'twitter', 'instagram', 'ukara_registered', 'food_available', 'store_available', 'drinks_available',
        'shelter_available', 'walk_on_price', 'hire_price', 'logo', 'address_1', 'address_2', 'city',
        'postcode', 'latitude', 'longitude', 'store_id', 'team_id', 'approved', 'featured', 'featured_ends', 'slug'
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

    protected $dates = [
        'featured_ends'
    ];

    public function getAvatarAttribute()
    {
        return 'https://d2zx08b2bgj27.cloudfront.net/assets/images/placeholder.jpg';
    }

    public function getAddressAtribute()
    {
        return $this->address_1.' '.$this->address_2.' '.$this->city.' '.$this->postcode;
    }
}