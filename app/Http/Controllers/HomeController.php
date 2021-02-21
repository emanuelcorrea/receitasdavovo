<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recipes = Recipe::select();

        return view('home.main', [
            'newsRecipe' => $recipes->limit(1)->get(),
            'lastRecipes' => $recipes->limit(3)->get(),
            'recipes' => $recipes->get()
        ]);
    }
}
