<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $fillable = [
        'qna_id', 'user_id', 'reply'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function qna()
    {
        return $this->belongsTo(Qna::class);
    }
}
