<?php
namespace PC\Stores;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PC\Business\Business;
use PC\User\User;

class Store extends Model
{
    use SoftDeletes, Sluggable, SluggableScopeHelpers;

    protected $table = 'stores';

    protected $fillable = [
        'name', 'company_name','address', 'email', 'phone_number', 'website_url', 'facebook_url', 'twitter_url',
        'instagram_url', 'linkedin_url', 'approved_by_id', 'approved_at', 'business_id', 'logo_url', 'slug'
    ];

    public function sluggable() {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }

    protected $dates = [
        'approved_at', 'deleted_at'
    ];

    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }

    public function approved_by()
    {
        return $this->belongsTo(User::class, 'approved_by_id');
    }

    public function applications()
    {
        return collect();
    }
}