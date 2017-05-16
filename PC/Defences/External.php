<?php
namespace PC\Defences;

use Illuminate\Database\Eloquent\Model;
use PC\User\User;

class External extends Model
{
    protected $table = 'site_membership_external_defences';

    protected $fillable = [
        'defence_name', 'defence_number', 'user_id', 'vaild_from', 'expires_at', 'membership_id', 'author_id', 'deleted_at'
    ];

    protected $dates = [
        'deleted_at', 'expires_at', 'vaild_from'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}