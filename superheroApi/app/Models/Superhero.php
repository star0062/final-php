<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;
    protected $table = 'superheroes';
                         // 1       2       3         4                5              6               7          8     9
    protected $fillable = ['name', 'sex', 'world', 'description', 'superpower', 'cityProtection', 'gadgets' , 'team', 'car'];
}
