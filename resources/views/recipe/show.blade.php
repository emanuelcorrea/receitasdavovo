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
                    <img src="http://receitas.emanuelcorrea.com.br/public/assets/img/receitas/bolo-de-fuba.jpg" alt="Receita de Bolo de Cenoura">
                </div>
                <div class="media-content">
                    <div class="ingredients">
                        <div class="titulo">
                            <h2 class="subtitle">Ingredientes</h2>
                        </div>

                        <ul>
                            {{-- <?php
                            // $ingredientes = explode('|', $receita->ingredientes);
                            // $i = 0;

                            // while ($i < count($ingredientes)): ?>
                            //     <li><p><?php echo $ingredientes[$i]; ?></p></li>
                            // <?php $i++; endwhile ?> --}}
                        </ul>
                    </div>
                    <div class="prepare">
                        <h2 class="subtitle">Modo de preparo</h2>
                        <ol>
                            <?php
                            // $preparo = explode('|', $receita->preparo);
                            // $i = 0;
                            //     while ($i < count($preparo)): ?>
                                {{-- <li><p><?php echo $preparo[$i]; ?></p></li> --}}

                            {{-- <?php $i++; endwhile ?> --}}
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
