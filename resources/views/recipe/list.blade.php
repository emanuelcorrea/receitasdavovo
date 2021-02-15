@extends('layouts.app')

@section('content')
<main class="receitas">
    <div class="container">
        @foreach ($recipes as $recipe)
            <a href="{{ route('recipe', $recipe->slug) }}">
                <article>
                    <header>
                        <div class="receitas-header">
                            <img class="receitas-img" src="{{ $recipe->img_url }}">
                            <div class="receitas-info">
                                <h2 style="color: black"><span style="background: black;"></span> {{ $recipe->name }}</h2>
                                <div>
                                    <p class="receitas-category">{{ $recipe->name }}</p>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="receitas-info">
                        <span class="time">{{ $recipe->created_at }}</span>
                    </div>
                </article>
            </a>
        @endforeach
    </div>
</main>
@endsection
