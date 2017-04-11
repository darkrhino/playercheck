<?php
namespace PC\User;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    protected $table = 'invites';

    protected $fillable = [
        'email', 'token', 'invitee_id'
    ];

    protected $dates = [
        'accepted_at'
    ];


}