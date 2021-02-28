@extends('layouts.app')

@section('content')
<main class="profile">
    <div class="container">
        <div class="row">
            <div class="profile-user">
                <div class="profile-description">
                    <img class="profile-image" src="{{ asset('/img/vovo-feliz.webp') }}" alt="Profile user image" width="90" height="93">

                    <p class="profile-username">{{ Auth::user()->name }}</p>
                </div>
                <div class="profile-menu">
                    <nav>
                        <ul>
                            <li class="profile-link">
                                <a href="#">
                                    <i class="fas fa-book-open"></i>
                                    Minhas receitas
                                </a>
                            </li>
                            <li class="profile-link">
                                <a href="#">
                                    <i class="fas fa-book"></i>
                                    Meus dados
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="profile-content">
                @yield('profile-content')
            </div>
        </div>
    </div>
</main>
@endsection
