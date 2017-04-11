<?php
namespace PC\Business;

use Illuminate\Database\Eloquent\Model;
use PC\User\User;

class Business extends Model
{
    protected $table = 'businesses';

    protected $fillable = [
        'name', 'address_1', 'address_2', 'address_3', 'city', 'county', 'postcode', 'latitude', 'longitude',
        'company_number', 'primary_phone_number', 'approved', 'approved_by_id'
    ];

    public function approved_by()
    {
        return $this->belongsTo(User::class, 'approved_by_id');
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'business_members')
            ->withPivot('added_by_id')
            ->withTimestamps();
    }
}