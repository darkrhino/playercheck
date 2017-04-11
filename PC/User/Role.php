<?php
namespace PC\User;

use Laratrust\LaratrustRole;

class Role extends LaratrustRole
{
    protected $fillable = [
        'name', 'display_name', 'description'
    ];

    public function users()
    {
        return $this->getMorphByUserRelation('users');
    }
}
