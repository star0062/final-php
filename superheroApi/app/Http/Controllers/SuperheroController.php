<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;

class SuperheroController extends Controller
{
    // Récupérer tous les superhéros
    public function index()
    {
        $superheroes = Superhero::all();
        return response()->json($superheroes);
    }

    // Ajouter un nouveau superhéros
    public function store(Request $request)
    {
        $superhero = new Superhero;
        $superhero->name = $request->name;
        $superhero->sex = $request->sex;
        $superhero->world = $request->world;
        $superhero->description = $request->description;
        $superhero->superpower = $request->superpower;
        $superhero->cityProtection = $request->cityProtection;
        $superhero->gadgets = $request->gadgets;
        $superhero->team = $request->team;
        $superhero->car = $request->car;
        $superhero->save();

        return response()->json([
            "message" => "Superhero Added."
        ], 201);
    }

    // Récupérer un superhéros par son ID
    public function show($id)
    {
        $superhero = Superhero::find($id);
        if (!empty($superhero)) {
            return response()->json($superhero);
        } else {
            return response()->json([
                "message" => "Superhero not found"
            ], 404);
        }
    }

    // Mettre à jour un superhéros
    public function update(Request $request, $id)
    {
        if (Superhero::where('id', $id)->exists()) {
            $superhero = Superhero::find($id);
            $superhero->name = is_null($request->name) ? $superhero->name : $request->name;
            $superhero->sex = is_null($request->sex) ? $superhero->sex : $request->sex;
            $superhero->world = is_null($request->world) ? $superhero->world : $request->world;
            $superhero->description = is_null($request->description) ? $superhero->description : $request->description;
            $superhero->superpower = is_null($request->superpower) ? $superhero->superpower : $request->superpower;
            $superhero->cityProtection = is_null($request->cityProtection) ? $superhero->cityProtection : $request->cityProtection;
            $superhero->gadgets = is_null($request->gadgets) ? $superhero->gadgets : $request->gadgets;
            $superhero->team = is_null($request->team) ? $superhero->team : $request->team;
            $superhero->car = is_null($request->car) ? $superhero->car : $request->car;
            $superhero->save();

            return response()->json([
                "message" => "Superhero Updated."
            ], 200);
        } else {
            return response()->json([
                "message" => "Superhero Not Found."
            ], 404);
        }
    }

    public function destroy($id)
    {
        if (Superhero::where('id', $id)->exists()) {
            $superhero = Superhero::find($id);
            $superhero->delete();

            return response()->json([
                "message" => "Superhero Deleted."
            ], 202);
        } else {
            return response()->json([
                "message" => "Superhero Not Found."
            ], 404);
        }
    }
}
