<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;

class Member extends Model
{
    protected $fillable = [
        'id', 'user_id', 'imagename', 'member_info'
    ];

    public $incrementing = false;

    public function user() {
        return $this->belongsTo(User::class);
    }
}
