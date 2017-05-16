<?php
namespace PC\User;

use Illuminate\Database\Eloquent\Model;

class Reset extends Model
{
    protected $table = 'password_resets';

    protected $fillable = [
        'email', 'token'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
}