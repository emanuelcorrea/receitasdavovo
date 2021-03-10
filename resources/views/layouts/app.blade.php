<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <!-- Title -->
        <title>Receitas da Vovó</title>

        <!-- Meta TAGS -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Cache-control" content="max-age=604800">
        <meta name="title" content="Receitas da Vóvó">
        <meta name="description" content="Receitas da Vovó - As melhores receitas você só encontra aqui.">
        <meta name="theme-color" content="Pink">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://metatags.io/">
        <meta property="og:title" content="Receitas da Vóvó">
        <meta property="og:description" content="Receitas da Vovó - As melhores receitas você só encontra aqui.">
        {{-- <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png"> --}}

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://metatags.io/">
        <meta property="twitter:title" content="Receitas da Vóvó">
        <meta property="twitter:description" content="Receitas da Vovó - As melhores receitas você só encontra aqui.">
        {{-- <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png"> --}}

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <!-- Fonts -->
        <link rel="preload" as="font" href="{{ asset('fonts/Harman-Retro-webfont.woff2') }}" crossOrigin="anonymous">
        <link rel="preload" as="font" href="{{ asset('fonts/Harman-Simple-webfont.woff2') }}" crossOrigin="anonymous">
        <link rel="preload" as="font" href="{{ asset('fonts/Harman-Sans-webfont.woff2') }}" crossOrigin="anonymous">
        <link rel="preload" as="font" href="{{ asset('fonts/CenturySchoolbook-Regular-webfont.woff2') }}" crossOrigin="anonymous">
        <link rel="preload" as="font" href="{{ asset('webfonts/fa-regular-400.woff2') }}" crossOrigin="anonymous">
        <link rel="preload" as="font" href="{{ asset('webfonts/fa-solid-900.woff2') }}" crossOrigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}" crossorigin="anonymous">

        <!-- Javascript -->
        <script src="{{ asset('/js/jssor.js') }}">console.log('ok')</script>
        <script src="{{ asset('/js/jquery.js') }}">console.log('ok')</script>

        <!-- Favicon -->
    </head>
    <body>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
        <script>
            window.onscroll = function() {
                var scroll = window.pageYOffset;
                document.getElementById("menu-hidden").style.position = "fixed";

                if (scroll > 250) {
                    document.getElementById("menu-fixed").style.top = "0";
                    document.getElementById("menu-hidden").style.position = "fixed";
                    document.getElementById("menu-hidden").style.top = "75.4px";
                }

                if (scroll < 250) {
                    document.getElementById("menu-fixed").style.top = "-150px";
                    document.getElementById("menu-hidden").style.top = "0px";
                }
            }
        </script>
    </body>
</html>
