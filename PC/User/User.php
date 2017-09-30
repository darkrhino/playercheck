<?php

namespace PC\User;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use PC\Business\Business;
use PC\Defences\External;
use PC\Request\Request;
use PC\Sites\Site;

class User extends Authenticatable
{
    use LaratrustUserTrait, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'dob', 'home_number', 'mobile_number', 'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }

    public function getTitledFullNameAttribute()
    {
        return $this->title.' '.$this->getFullNameAttribute();
    }

    public function resets()
    {
        return $this->hasMany(Reset::class, 'email', 'email');
    }

    public function businesses()
    {
        return $this->belongsToMany(Business::class, 'business_members')
            ->withPivot('added_by_id')
            ->withTimestamps();
    }

    public function defences()
    {
        return $this->hasMany(External::class, 'user_id', 'id');
    }

    public function requests()
    {
        return $this->hasMany(Request::class, 'user_id', 'id');
    }

    public function getHasApprovedBusinessesAttribute()
    {
        $result = false;

        foreach($this->businesses as $business){
            if($business->approved()){
                $result = true;
            }
        }

        return $result;
    }

    public function sites()
    {
        return $this->belongsToMany(Site::class, 'site_memberships')
            ->withPivot('added_by_id', 'expires_at', 'infinite_membership')
            ->withTimestamps();
    }

}
