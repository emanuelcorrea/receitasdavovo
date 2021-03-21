<header id="header-menu">
    <div class="container">
        <div class="header">
            <div class="header__logo">
                <a href="{{ url('/') }}" alt="Logo Receitas da Vovó">
                    <img src="{{ asset('/img/logo2.webp') }}" width="140" height="85" alt="Logo">
                </a>
            </div>
            <div class="header__search">
                <form action="{{ url('/') }}" method="GET">
                    @csrf
                    <input aria-label="Campo de pesquisa de receita" type="search" name="search" placeholder="Procure por uma receita">
                    <button type="submit" name="submit" aria-label="Botão de pesquisa">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="header__options">
                <nav class="header-nav">
                    <ul>
                        <li class="header-nav__item">
                            <a href="{{ url('receitas') }}" class="header-nav__link header-nav__link--active">Receitas</a>
                        </li>
                    </ul>
                </nav>
                <div id="menu-button" class="header-menu__icon">
                    <label>
                        <i class="fas fa-bars"></i>
                    </label>
                </div>
                <div class="header-menu" id="menu-hidden">
                    <div class="header-menu__user">
                        <div class="header-menu__logo">
                            <img src="{{ asset('/img/vovo-feliz.webp') }}" width="200" height="207" alt="Logo user">
                        </div>
                    </div>
                    <div class="header-menu__nav">
                        @guest
                            <ul>
                                <li class="header-menu__item">
                                    <p class="header-menu__link">
                                        Olá, <span>visitante</span>!
                                    </p>
                                </li>
                                <li class="header-menu__item">
                                    <a href="{{ url('login') }}" class="header-menu__link" style="text-align: center;">Entrar / Cadastrar</a>
                                </li>
                                <li class="header-menu__item">
                                    <a href="#" class="header-menu__link">
                                        Suporte
                                        <i class="fas fa-envelope-open-text"></i>
                                    </a>
                                </li>
                            </ul>
                        @else
                            <ul>
                                <li class="header-menu__item">
                                    <p>Olá, <span>{{ Auth::user()->name }}</span>!</p>
                                </li>
                                <li class="header-menu__item">
                                    <a href="{{ route('profile') }}" class="header-menu__link">
                                        Minha conta
                                        <i class="far fa-newspaper"></i>
                                    </a>
                                </li>
                                <li class="header-menu__item">
                                    <a href="#" class="header-menu__link">
                                        Minhas receitas
                                        <i class="fas fa-book"></i>
                                    </a>
                                </li>
                                <li class="header-menu__item">
                                    <a href="#" class="header-menu__link">
                                        Suporte
                                        <i class="fas fa-envelope-open-text"></i>
                                    </a>
                                </li>
                                <li class="header-menu__item">
                                    <a href="{{ url('logout') }}" class="header-menu__link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Sair
                                        <i class="fas fa-sign-out-alt"></i>
                                    </a>
                                    <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-fixed">
        <div class="container">
            <div class="header menu-fixed">
                <div class="header__logo">
                    <a href="{{ url('/') }}" alt="Logo Receitas da Vovó">
                        <img src="{{ asset('/img/logo2.webp') }}" width="100" height="61" alt="Logo">
                    </a>
                </div>
                <div class="header__search">
                    <form action="{{ url('/') }}" method="GET">
                        @csrf
                        <input aria-label="Campo de pesquisa de receita" type="search" name="search" placeholder="Procure por uma receita">
                        <button type="submit" name="submit" value="Submit" aria-label="Botão de pesquisa">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="header__options">
                    <nav class="header-nav">
                        <ul>
                            <li class="header-nav__item">
                                <a href="{{ url('receitas') }}" class="header-nav__link header-nav__link--active">Receitas</a>
                            </li>
                        </ul>
                    </nav>
                    <div id="menu-fixed-button" class="header-menu__icon">
                        <label>
                            <i class="fas fa-bars"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="submenu">
    <div class="container">
        <nav>
            <ul>
                <li><a href="#">Bolos</a></li>
                <li><a href="#">Bebidas</a></li>
                <li><a href="#">Sobremesas</a></li>
                <li><a href="#">Saladas</a></li>
                <li><a href="#">Milkshakes</a></li>
                <li><a href="#">Tortas</a></li>
            </ul>
        </nav>
    </div>
</section>
