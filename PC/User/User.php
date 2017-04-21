<?php

namespace PC\User;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use PC\Business\Business;

class User extends Authenticatable
{
    use LaratrustUserTrait, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
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

    public function businesses()
    {
        return $this->belongsToMany(Business::class, 'business_members')
            ->withPivot('added_by_id')
            ->withTimestamps();
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

}
