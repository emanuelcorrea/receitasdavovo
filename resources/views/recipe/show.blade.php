@extends('layouts.app')

@section('content')
<main class="main-content">
    <div class="container">
        <article class="recipe" id="post#id">
            <header class="recipe__header">
                <div class="recipe__title">
                    <h1>{{ $recipe->name }}</h1>
                </div>
                <div class="recipe__image">
                    <img src="{{ $recipe->img_url }}" alt="Receita de Bolo de Cenoura">
                </div>
            </header>
            <div class="recipe__body">
                <div class="recipe__ingredients">
                    <div class="recipe__title">
                        <h2 class="subtitle">Ingredientes</h2>
                    </div>

                    <ul>
                        @foreach ($recipe->ingredients as $ingredient)
                            <li>{{ $ingredient->quantity . ' ' . $ingredient->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="prepare">
                    <h2 class="subtitle">Modo de preparo</h2>
                    <ol>
                        @foreach ($recipe->howPrepare as $prepare)
                            <li>{{ $prepare->prepare }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <div class="br">
                <i class="fas fa-utensils"></i>
            </div>
        </article>
    </div>
</main>
@endsection
