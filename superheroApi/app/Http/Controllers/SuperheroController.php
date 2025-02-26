<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use Illuminate\Support\Facades\Validator;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::all();
        return response()->json($superheroes);
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'gender' => 'required|in:male,female',
            'planet' => 'required|string|max:50',
            'description' => 'required|string',
            'superpower' => 'required|string',
            'city_protection' => 'required|string',
            'gadgets' => 'nullable|string',
            'team' => 'nullable|string',
            'vehicle' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }

        Superhero::create($request->all());

        return redirect('/table-sh')->with('success', 'Superhero added successfully');
    }

    public function show($id)
    {
        $superhero = Superhero::find($id);

        if (!$superhero) {
            return response()->json([
                "message" => "Superhero not found"
            ], 404);
        }

        return view('superheroes.show', compact('superhero'));
    }

    public function update(Request $request, $id)
    {
        $superhero = Superhero::find($id);

        if (!$superhero) {
            return response()->json([
                "message" => "Superhero not found"
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'string|max:50',
            'gender' => 'in:male,female',
            'planet' => 'string|max:50',
            'description' => 'string',
            'superpower' => 'string',
            'city_protection' => 'string',
            'gadgets' => 'nullable|string',
            'team' => 'nullable|string',
            'vehicle' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }

        $superhero->update($request->only([
            'name', 'gender', 'planet', 'description', 'superpower',
            'city_protection', 'gadgets', 'team', 'vehicle'
        ]));

        return redirect('/table-sh')->with('success', 'Superhero updated successfully');
    }

    
        public function destroy($id)
    {
        $superhero = Superhero::find($id);
    
        if (!$superhero) {
            return redirect('/table-sh')->with('error', 'Superhero not found');
        }
    
        $superhero->delete();
    
        return redirect('/table-sh')->with('success', 'Superhero deleted successfully');
    }

        public function edit($id)
        {
            $superhero = Superhero::find($id);
        
            if (!$superhero) {
                return response()->json([
                    "message" => "Superhero not found"
                ], 404);
            }
        
            return view('superheroes.edit', compact('superhero'));
        }

        public function create()
        {
            return view('superheroes.create');
        }

}
