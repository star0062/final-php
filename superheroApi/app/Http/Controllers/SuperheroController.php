<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use Illuminate\Support\Facades\Validator;

class SuperheroController extends Controller
{
    // Liste tous les superhéros
    public function index()
    {
        $superheroes = Superhero::all();
        return response()->json($superheroes);
    }

    // Création d'un superhéros
    public function store(Request $request)
    {
        // Validation des données
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

        // Si la validation échoue
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }

        // Création du superhéros
        $superhero = Superhero::create($request->all());

        return response()->json([
            "message" => "Superhero record created",
            "superhero" => $superhero
        ], 201);
    }

    // Afficher un superhéros spécifique
    public function show($id)
    {
        $superhero = Superhero::find($id);

        if (!$superhero) {
            return response()->json([
                "message" => "Superhero not found"
            ], 404);
        }

        return response()->json($superhero);
    }

    // Mettre à jour un superhéros
    public function update(Request $request, $id)
    {
        $superhero = Superhero::find($id);

        if (!$superhero) {
            return response()->json([
                "message" => "Superhero not found"
            ], 404);
        }

        // Validation des données
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

        // Si la validation échoue
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }

        // Mise à jour des champs remplis
        $superhero->update($request->only([
            'name', 'gender', 'planet', 'description', 'superpower',
            'city_protection', 'gadgets', 'team', 'vehicle'
        ]));

        return response()->json([
            "message" => "Records updated successfully",
            "superhero" => $superhero
        ], 200);
    }

    // Supprimer un superhéros
    public function destroy($id)
    {
        $superhero = Superhero::find($id);

        if (!$superhero) {
            return response()->json([
                "message" => "Superhero not found"
            ], 404);
        }

        $superhero->delete();

        return response()->json([
            "message" => "Superhero deleted successfully"
        ], 202);
    }
}
