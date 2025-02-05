<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    protected $fillable = [
        'real_name', 'alias', 'gender', 'home_planet', 'description',
        'powers', 'city', 'gadgets', 'team', 'vehicle', 'user_id'
    ];

}
