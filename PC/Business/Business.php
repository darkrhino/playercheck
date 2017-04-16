<?php
namespace PC\Business;

use Illuminate\Database\Eloquent\Model;
use PC\Stores\Store;
use PC\User\User;

class Business extends Model
{
    protected $table = 'businesses';

    protected $fillable = [
        'name', 'address_1', 'address_2', 'address_3', 'city', 'county', 'postcode', 'latitude', 'longitude',
        'company_number', 'primary_phone_contact', 'approved_by_id', 'approved_at',
        'geo_address'
    ];

    protected $dates = [
        'approved_at'
    ];

    public function scopeApproved($query)
    {
        return $query->where('approved_at', null);
    }

    public function scopeNotApproved($query)
    {
        return $query->where('approved_at', '==', null);
    }

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

    public function stores()
    {
        return $this->hasMany(Store::class, 'business_id');
    }

    public function getApprovalStatusIconAttribute()
    {
        if($this->approved){
            return '<span class="text-success"><i class="fa fa-check"></i></span>';
        }else{
            return '<span class="text-danger"><i class="fa fa-times"></i></span>';
        }
    }

    public function getApprovalStatusIconColourAttribute()
    {
        if($this->approved != null){
            return 'success';
        }else{
            return 'danger';
        }
    }

    public function getFullAddress()
    {
        if($this->geo_address){
            return $this->geo_address;
        }else{
            return $this->address_1.' '.$this->address_2.', '.$this->address_3.', '.$this->city.', '.$this->county.', 
            '.$this->poststcode;
        }
    }

}