<!-- navbar.php -->
<header>
    <?php
    // Obtém o nome da página atual
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>

    <form method="post" action="login&Registration.php">
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <a href="paginaInicial.php">
                    <img src="../img/logo.jpg" alt="Atlas" class="media-object img-responsive img-thumbnail">
                </a>
            </div>

            <!-- Links de navegação -->
            <ul class="nav-links">
                <li class="nav-item">
                    <a href="paginaInicial.php" class="<?php echo ($currentPage == 'paginaInicial.php') ? 'active' : ''; ?>">
                        <img src="../img/home.png" alt="Home" class="nav-icon"> Página Inicial
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pacotes.php" class="<?php echo ($currentPage == 'pacotes.php') ? 'active' : ''; ?>">
                        <img src="../img/briefcase.png" alt="Pacotes" class="nav-icon"> Pacotes
                    </a>
                </li>
                <li class="nav-item">
                    <a href="passagens.php" class="<?php echo ($currentPage == 'passagens.php') ? 'active' : ''; ?>">
                        <img src="../img/plane.png" alt="Passagens" class="nav-icon"> Passagens
                    </a>
                </li>
                <li class="nav-item">
                    <a href="hospedagem.php" class="<?php echo ($currentPage == 'hospedagem.php') ? 'active' : ''; ?>">
                        <img src="../img/bed.png" alt="Hospedagem" class="nav-icon"> Hospedagem
                    </a>
                </li>
            </ul>

            <!-- Botões de Login e Registro -->
            <div class="btn-container">
                <a href="login&Registration.php" class="btn btn-login">Login</a>
                <a href="login&Registration.php" class="btn btn-register">Registrar-se</a>
            </div>
        </div>
    </form>
</header>
