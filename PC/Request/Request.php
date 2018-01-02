<?php
namespace PC\Request;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PC\User\User;

class Request extends Model
{
    use SoftDeletes;

    protected $table = 'user_generated_request_codes';

    protected $fillable = [
        'code', 'user_id', 'claimed_id', 'claimed_at', 'expires_at'
    ];

    protected $dates = [
        'claimed_at', 'expires_at', 'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function claimed()
    {
        return $this->belongsTo(User::class, 'claimed_id');
    }

    public function getExpiredAttribute()
    {
        if($this->expires_at > Carbon::now()){
            return 'Expires in '.$this->expires_at->diffForHumans();
        }else{
            return 'Expired';
        }
    }
}