<header class="header">
    <div class="container">
        <div class="header-menu">
            <div class="logo">
                <a href="{{ url('/') }}" alt="Logo Receitas da Vovó" width="200">
                    <img src="http://receitas.emanuelcorrea.com.br/public/assets/img/logo2.png" width="140">
                </a>
            </div>
            <div class="search-menu">
                <div class="search">
                    <form action="{{ url('/') }}" method="GET">
                        @csrf
                        <input type="search" name="search" id="search" placeholder="Procure por uma receita">
                        <button type="submit" name="submit" id="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="nav-menu">
                <nav>
                    <ul>
                        <li class="nav-link">
                            <a href="{{ url('receitas') }}" class="active">Receitas</a>
                        </li>
                    </ul>
                </nav>
                <div class="icon">
                    <label for="check-menu">
                        <i class="fas fa-bars"></i>
                    </label>
                </div>
                <input type="checkbox" name="check-menu" id="check-menu">
                <div id="menu-hidden">
                    <div class="user">
                        <div class="logo-user">
                            <img src="http://receitas.emanuelcorrea.com.br/public/assets/img/vovo-feliz.png">
                        </div>
                    </div>
                    <div class="menu-hidden-nav">
                        @guest
                            <ul>
                                <li><p>Olá, <span>visitante</span>!</p></li>
                                <li><a href="{{ url('login') }}" style="text-align: center;">Entrar / Cadastrar</a></li>
                                <li><a href="#">Suporte <i class="fas fa-envelope-open-text"></i></a></li>
                            </ul>
                        @else
                            <ul>
                                <li><p>Olá, <span>{{ Auth::user()->name }}</span>!</p></li>
                                <li><a href="{{ route('profile') }}">Minha conta <i class="far fa-newspaper"></i></a></li>
                                <li><a href="#">Minhas receitas <i class="fas fa-book"></i></a></li>
                                <li><a href="#">Suporte <i class="fas fa-envelope-open-text"></i></a></li>
                                <li>
                                    <a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Sair <i class="fas fa-sign-out-alt"></i>
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
            <div class="menu">
                <a href="{{ url('/') }}" alt="Logo Receitas da Vovó">
                    <img src="http://receitas.emanuelcorrea.com.br/public/assets/img/logo2.png" width="100">
                </a>
                <div class="search">
                    <form action="" method="post">
                        <input type="search" name="search" id="search" placeholder="Procure por uma receita">
                        <button type="submit" name="submit" id="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="nav-menu">
                    <label for="check-menu">
                        <i class="fas fa-bars"></i>
                    </label>
                    <div id="menu-hidden">
                        <div class="user">
                            <div class="logo-user">
                                <img src="http://receitas.emanuelcorrea.com.br/public/assets/img/vovo-feliz.png">
                            </div>
                        </div>
                        <ul>
                            <li><p>Olá, <span>visitante</span>!</p></li>
                            <li><a href="{{ url('login') }}" style="text-align: center;">Entrar / Cadastrar</a></li>
                            <li><a href="#">Suporte <i class="fas fa-envelope-open-text"></i></a></li>
                        </ul>
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
