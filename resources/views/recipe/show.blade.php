@extends('layouts.app')

@section('content')
<main class="main-content">
    <div class="container">
        <article id="post#id" class="article">
            <header>
                <div class="titulo">
                    <h1 class="title">{{ $recipe->name }}</h1>
                </div>
                <span class="arrow">
                    <img src="/img/arrows.png">
                </span>
            </header>
            <div class="media">
                <div class="media-img">
                    <img src="{{ $recipe->img_url }}" alt="Receita de Bolo de Cenoura">
                </div>
                <div class="media-content">
                    <div class="ingredients">
                        <div class="titulo">
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
            </div>
            <div class="br">
                <i class="fas fa-utensils"></i>
            </div>
        </article>
    </div>
</main>
@endsection
