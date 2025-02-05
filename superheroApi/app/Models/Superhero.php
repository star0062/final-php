<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;
    protected $table = 'superheroes';
    protected $fillable = ['name', 'sex', 'word', 'description', 'superpower', 'city protection', 'gadgets' , 'team', 'car'];
}
