<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $primaryRecipes = Recipe::orderByDesc('id')
            ->limit(2)->get();

        $secondaryRecipes = Recipe::limit(3)->get();

        $recipes = Recipe::all();

        return view('home.main', [
            'primaryRecipes' => $primaryRecipes,
            'secondaryRecipes' => $secondaryRecipes,
            'recipes' => $recipes
        ]);
    }
}
