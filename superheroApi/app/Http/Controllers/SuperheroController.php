<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;

class SuperheroController extends Controller
{
    public function index()
    {
        $superhero = Superhero::all();
        return response()->json($superhero);
    }

    public function store(Request $request)
    {
        $superhero = new Superhero();
        $superhero->name = $request->name;
        $superhero->gender = $request->gender;
        $superhero->planet = $request->planet;
        $superhero->description = $request->description;
        $superhero->superpower = $request->superpower;
        $superhero->city_protection = $request->city_protection;
        $superhero->gadgets = $request->gadgets;
        $superhero->team = $request->team;
        $superhero->vehicle = $request->vehicle;
        $superhero->save();

        return response()->json([
            "message" => "Superhero record created"
        ], 201);
    }

    public function show($id)
    {
        $superhero = Superhero::find($id);
        if ($superhero) {
            return response()->json($superhero);
        } else {
            return response()->json([
                "message" => "Superhero not found"
            ], 404);
        }
    }
    
    public function update(Request $request, $id)
    {
        if (Superhero::where('id', $id)->exists()) {
            $superhero = Superhero::find($id);
            $superhero->name = is_null($request->name) ? $superhero->name : $request->name;
            $superhero->gender = is_null($request->gender) ? $superhero->gender : $request->gender;
            $superhero->planet = is_null($request->planet) ? $superhero->planet : $request->planet;
            $superhero->description = is_null($request->description) ? $superhero->description : $request->description;
            $superhero->superpower = is_null($request->superpower) ? $superhero->superpower : $request->superpower;
            $superhero->city_protection = is_null($request->city_protection) ? $superhero->city_protection : $request->city_protection;
            $superhero->gadgets = is_null($request->gadgets) ? $superhero->gadgets : $request->gadgets;
            $superhero->team = is_null($request->team) ? $superhero->team : $request->team;
            $superhero->vehicle = is_null($request->vehicle) ? $superhero->vehicle : $request->vehicle;
            $superhero->save();

            return response()->json([
                "message" => "Records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Superhero not found"
            ], 404);
        }
    }

    public function destroy($id)
    {
        if (Superhero::where('id', $id)->exists()) {
            $superhero = Superhero::find($id);
            $superhero->delete();
            return response()->json([
                "message" => "Records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Superhero not found"
            ], 404);
        }
    }
}