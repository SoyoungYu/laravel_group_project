<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info_program extends Model
{
    protected $fillable = [
        'week', 'image', 'title', 'info'
    ];
}
