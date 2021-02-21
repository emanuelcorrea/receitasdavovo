@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container">
        <section class="banner">
            <div id="slider">
                <div id="slide"><p>Oi</p></div>
                <div id="slide"><p>OI2</p></div>
                <div id="slide"><p>OI3</p></div>
                <div id="slide"><p>Oi4</p></div>
            </div>
        </section>
        <section class="destaques">
            <div class="titulo">
                <h2 class="title">Destaques</h2>
            </div>
            <article class="destaque">
                <div class="destaque-full">
                    <div class="destaque-grande">
                        @foreach ($primaryRecipes as $recipe)
                            <div class="destaque-item">
                                <a href="{{ $recipe->slug }}">
                                    <img src="{{ $recipe->img_url }}">
                                    <h2>{{ $recipe->name }}</h2>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="destaque-pequeno">
                        @foreach ($secondaryRecipes as $recipe)
                            <div class="destaque-item">
                                <a href="{{ route('recipe', $recipe->slug) }}">
                                    <img src="{{ $recipe->img_url }}">
                                    <h2>{{ $recipe->name }}</h2>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </article>
        </section>
        @foreach ($recipes as $recipe)
            <article class="recipe">
                <header class="header__header">
                    <div class="recipe__title">
                        <h2>{{ $recipe->name }}</h2>
                    </div>
                    <div class="recipe__image">
                        <img src="{{ $recipe->img_url }}" alt="Receita de Bolo de Cenoura">
                    </div>
                </header>
                <div class="recipe__body">
                    <div class="recipe__ingredients">
                        <div class="recipe__subtitle">
                            <h2>Ingredientes</h2>
                        </div>

                        <ul>
                            @foreach ($recipe->ingredients as $ingredient)
                                <li>{{ $ingredient->quantity . ' ' . $ingredient->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="recipe__instructions">
                        <div class="recipe__subtitle">
                            <h2>Modo de preparo</h2>
                        </div>
                        <ol>
                            @foreach ($recipe->howPrepare as $prepare)
                                <li>{{ $prepare->prepare }}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>
                <div class="recipe__icon">
                    <i class="fas fa-utensils"></i>
                </div>
            </article>
        @endforeach
    </div>
</main>
@endsection
