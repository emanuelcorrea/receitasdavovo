@extends('layouts.app')

@section('content')
<main class="content">
    <div class="container">
        <section class="banner">
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:580px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset('/img/double-tail-spin.svg') }}" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:580px;overflow:hidden;">
                    <div style="background-color:#000000;">
                        <img data-u="image" style="opacity:1;" src="{{ asset('/img/banner.jpg') }}" alt="Banner" width="980" height="580"/>
                    </div>
                    <div>
                        <img data-u="image" style="opacity:1;" src="{{ asset('/img/banner2.webp') }}" alt="Banner" width="980" height="580"/>
                    </div>
                    <div>
                        <img data-u="image" src="{{ asset('/img/banner3.webp') }}" alt="Banner" width="980" height="580"/>
                    </div>
                    <div style="background-color:#000000;">
                        <img data-u="image" style="opacity:1;" src="{{ asset('/img/banner4.webp') }}" alt="Banner" width="980" height="580"/>
                    </div>
                    <div>
                        <img data-u="image" style="opacity:1;" src="{{ asset('/img/banner5.webp') }}" alt="Banner" width="980" height="580"/>
                    </div>
                </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web animation composer</a>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:13px;height:13px;">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                        </svg>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                    </svg>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(document).ready(function ($) {

                var jssor_1_options = {
                $AutoPlay: 1,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$,
                    $SpacingX: 20,
                    $SpacingY: 20
                }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                /*#region responsive code begin*/

                var MAX_WIDTH = 3000;

                function ScaleSlider() {
                    var containerElement = jssor_1_slider.$Elmt.parentNode;
                    var containerWidth = containerElement.clientWidth;

                    if (containerWidth) {

                        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                        jssor_1_slider.$ScaleWidth(expectedWidth);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }

                ScaleSlider();

                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                /*#endregion responsive code end*/
                });
            </script>
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
                                <img src="{{ asset('/img/receitas/quentao-vinho.jpg') }}" alt="Quentão de Vinho" title="Destaque: Quentão de Vinho" width="710" height="400">
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
                                            <img src="{{ asset('/img/receitas/quentao-vinho.jpg') }}" alt="{{ $recipe->name }}" width="150" height="150">
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
                        <img src="{{ asset('/img/receitas/quentao-vinho.jpg') }}" alt="Receita de Bolo de Cenoura" width="710" height="400">
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
