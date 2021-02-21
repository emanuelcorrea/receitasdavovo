@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container">
        <section class="banner">
            <div id="slider">
                <div id="slide"><p>Titulo 1</p></div>
                <div id="slide"><p>Titulo 2</p></div>
                <div id="slide"><p>Titulo 3</p></div>
                <div id="slide"><p>Titulo 4</p></div>
            </div>
        </section>
        <section class="news">
            <div class="news__title">
                <h2>Destaques</h2>
            </div>
            <div class="news__recipes">
                <div class="news-primary">
                    <a href="{{ url('dr-sydney-wehner-iii') }}" class="news-primary__item">
                        <div class="news-primary__header">
                            <div class="news-primary__image">
                                <img src="http://receitas.emanuelcorrea.com.br/public/assets/img/receitas/quentao-de-vinho.jpg" alt="Quentão de Vinho" title="Destaque: Quentão de Vinho">
                            </div>
                            <div class="news-primary__title">
                                <h2>Quentão de Vinho</h2>
                            </div>
                        </div>
                        <div class="news-primary__body">
                            <div class="news-primary__description">
                                <p>Quentão e vinho quente são duas coisas que não podem faltar no inverno (especialmente se você vai organizar uma Festa Junina).</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="news-last">
                    <nav>
                        <ul>
                            @foreach ($lastRecipes as $recipe)
                            <li>
                                <a class="news-last__item" href="{{ route('recipe', $recipe->slug) }}">
                                    <div class="news-last__header">
                                        <div class="news-last__image">
                                            <img src="http://receitas.emanuelcorrea.com.br/public/assets/img/receitas/quentao-de-vinho.jpg" alt="{{ $recipe->name }}">
                                        </div>
                                    </div>
                                    <div class="news-last__body">
                                        <div class="news-last__title">
                                            <h3>{{ $recipe->name }}</h3>
                                        </div>
                                        <div class="news-last__prepare">
                                            <div class="news-last__time">
                                                <i class="far fa-clock"></i>
                                                <p>40min</p>
                                            </div>
                                            <div class="news-last__portions">
                                                <i class="far fa-grin-beam"></i>
                                                <p>2</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                    {{-- @foreach ($newsRecipes as $recipe)
                        <div class="news__item">
                            <a href="{{ $recipe->slug }}">
                                <img src="{{ $recipe->img_url }}">
                                <h2>{{ $recipe->name }}</h2>
                            </a>
                        </div>
                    @endforeach --}}
                </div>
            </div>
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
