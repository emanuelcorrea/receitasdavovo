<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140915737-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-140915737-1');
        </script>

        <!-- Title -->
        <title>Receitas da Vovó</title>

        <!-- Meta TAGS -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" integrity="sha256-PF6MatZtiJ8/c9O9HQ8uSUXr++R9KBYu4gbNG5511WE=" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Karla|Lora|Pacifico|Roboto+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap" rel="stylesheet">

        <!-- Favicon -->
        {{-- <link rel="icon" type="imagem/png" href="<?php echo DIRIMG;?>favicon.png"> --}}
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
                    document.getElementById("menu-fixed").style.top = "-100px";
                    document.getElementById("menu-hidden").style.top = "0px";
                }
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </body>
</html>
