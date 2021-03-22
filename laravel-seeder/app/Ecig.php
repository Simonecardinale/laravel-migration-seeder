<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecig extends Model
{
    protected $fillable = [
        'marca', 
        'tipologia', 
        'liquidi',
        'prezzo', 
        'description',
    ];
}
