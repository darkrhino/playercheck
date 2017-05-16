<?php
namespace PC\Sites;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PC\Business\Business;
use PC\Stores\Store;
use PC\User\User;

class Site extends Model
{
    use SoftDeletes, Sluggable, SluggableScopeHelpers;

    protected $table = 'sites';

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

    public function scopeApproved($query)
    {
        return $query->whereNotNull('approved_at');
    }

    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }

    public function approved_by_id()
    {
        return $this->belongsTo(User::class, 'approved_by_id');
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'site_memberships')
            ->withPivot('added_by_id', 'expires_at', 'infinite_membership')
            ->withTimestamps();
    }

    public function inf_members()
    {
        return $this->belongsToMany(User::class, 'site_memberships')->wherePivot('infinite_membership', 1);
    }

    public function store()
    {
        return $this->belongsToMany(Store::class, 'site_stores')
            ->withTimestamps();
    }
}