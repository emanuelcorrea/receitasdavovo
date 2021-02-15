<header class="header">
    <div class="container">
        <div class="header-menu">
            <div class="logo">
                <a href="/" alt="Logo Receitas da Vovó" width="200">
                    <img src="http://receitas.emanuelcorrea.com.br/public/assets/img/logo2.png" width="200">
                </a>
            </div>
            <div class="search-menu">
                <div class="search">
                    <form action="" method="post">
                        <input type="search" name="search" id="search" placeholder="Procure por uma receita">
                        <button type="submit" name="submit" id="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="nav-menu">
                    <div class="nav-link">
                        <a href="receitas" class="active">Receitas</a>
                        {{-- <?php if (isset($_SESSION['account']['privilegio']) && $_SESSION['account']['privilegio'] == 1) { ?>
                            <a href="painel">Painel</a>
                        <?php }?> --}}
                    </div>
                    <div class="icon">
                        <label for="check-menu">
                            <i class="fas fa-bars"></i>
                        </label>
                    </div>
                </div>
                <input type="checkbox" name="check-menu" id="check-menu">
                <div id="menu-hidden">
                    <div class="user">
                        <div class="logo-user">
                            <img src="http://receitas.emanuelcorrea.com.br/public/assets/img/vovo-feliz.png">
                        </div>
                    </div>
                    <ul>
                        <li><p>Olá, <span>visitante</span>!</p></li>
                        <li><a href="#" style="text-align: center;">Entrar / Cadastrar</a></li>
                        <li><a href="#">Suporte <i class="fas fa-envelope-open-text"></i></a></li>
                    </ul>
                </div>
                {{-- <?php
                    if (isset($_SESSION['account']['nome'])) {
                        require("menu-logado.php");
                    } else {
                        require("menu-deslogado.php");
                    }
                ?> --}}
            </div>
        </div>
    </div>
    <div id="menu-fixed">
        <div class="container">
            <div class="menu">
                <a href="/" alt="Logo Receitas da Vovó" width="100"></a>
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
                            <li><a href="#" style="text-align: center;">Entrar / Cadastrar</a></li>
                            <li><a href="#">Suporte <i class="fas fa-envelope-open-text"></i></a></li>
                        </ul>
                    </div>
                    {{-- <?php require("menu-deslogado.php"); ?> --}}
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
