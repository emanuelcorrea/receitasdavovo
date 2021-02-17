@extends('layouts.app')

@section('content')
<main class="profile">
    <div class="container">
        <div class="row">
            <div class="profile-user">
                <div class="profile-description">
                    <img class="profile-image" src="http://receitas.emanuelcorrea.com.br/public/assets/img/vovo-feliz.png" alt="Profile user image">

                    <p class="profile-username">{{ Auth::user()->name }}</p>
                </div>
                <div class="profile-menu">
                    <nav>
                        <ul>
                            <li class="profile-link">
                                <a href="#">Meus dados</a>
                            </li>
                            <li class="profile-link">
                                <a href="#">Minhas receitas</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="profile-content">
                conteudo
            </div>
        </div>
    </div>
</main>
@endsection
