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
            {{-- <?php $data = $this->model->selectObject(); ?> --}}

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
            <article id="post{{ $recipe->id }}" class="article">
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

                            {{-- <ul>
                                <?php
                                $ingredientes = explode('|', $index);
                                $i = 0;

                                while ($i < count($ingredientes)): ?>
                                    <li><p><?php echo $ingredientes[$i]; ?></p></li>
                                <?php $i++; endwhile ?>
                            </ul> --}}
                        </div>
                        <div class="prepare">
                            <div class="titlo">
                                <h2 class="subtitle">Modo de preparo</h2>
                            </div>
                            <ol>
                                {{-- <?php
                                $preparo = explode('|', $receita->preparo);
                                $i = 0;
                                    while ($i < count($preparo)): ?>
                                    <li><p><?php echo $preparo[$i]; ?></p></li>

                                <?php $i++; endwhile ?> --}}
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="br">
                    <i class="fas fa-utensils"></i>
                </div>
            </article>
        @endforeach
    </div>
</main>
@endsection
