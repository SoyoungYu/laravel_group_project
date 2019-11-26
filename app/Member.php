<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'image', 'member_info'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
