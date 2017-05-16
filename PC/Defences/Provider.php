<?php
namespace PC\Defences;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'defence_providers';

    protected $fillable = [
        'name', 'details', 'website_url', 'logo_url', 'facebook_url'
    ];

    public function defences()
    {
        return $this->hasMany(Defence::class, 'defence_id', 'id');
    }
}