<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero; 

class tableSuperheroController extends Controller
{
   
        public function tableSH(Request $request)
        {
            $query = $request->input('query');
        
            if ($query) {
                $superheroes = Superhero::where('name', 'LIKE', "{$query}%")
                    ->orWhere('description', 'LIKE', "%{$query}%")
                    ->orWhere('superpower', 'LIKE', "%{$query}%")
                    ->get();
            } else {
                $superheroes = Superhero::all();
            }
        
            return view('TableSuperhero', compact('superheroes'));
        }
}
