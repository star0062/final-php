<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero; // Importer le modèle

class tableSuperheroController extends Controller
{
    public function tableSH()
    {
        $superheroes = Superhero::all(); // Récupérer tous les superhéros
        return view('TableSuperhero', compact('superheroes'));
    }
}
