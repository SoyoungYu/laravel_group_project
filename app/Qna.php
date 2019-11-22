<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qna extends Model
{
    protected $fillable = [
        'user_id', 'title', 'question', 'view'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
