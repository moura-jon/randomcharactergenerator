<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'name', 'implications', 'chances', 'traumatic_implications'
    ];
}
