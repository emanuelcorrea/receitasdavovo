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

        $primaryRecipes = $recipes->orderByDesc('id')
            ->limit(2)->get();

        $secondaryRecipes = $recipes->limit(3)->get();

        return view('home.main', [
            'primaryRecipes' => $primaryRecipes,
            'secondaryRecipes' => $secondaryRecipes,
            'recipes' => $recipes->get()
        ]);
    }
}
