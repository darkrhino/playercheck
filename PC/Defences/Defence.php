<?php
namespace PC\Defences;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PC\Sites\Site;
use PC\User\User;

class Defence extends Model
{
    use SoftDeletes;

    protected $table = 'defences';

    protected $fillable = [
        'user_id', 'site_id', 'defence_id', 'vaild_at', 'renewed_at', 'expires_at', 'created_by_id'
    ];

    protected $dates = [
        'vaild_at', 'renewed_at', 'expires_at', 'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id');
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'defence_id');
    }
}