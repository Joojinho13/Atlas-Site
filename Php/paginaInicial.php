<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlas - Agência de Viagens</title>

    <!-- Importar Navbar -->
    <link rel="stylesheet" href="../components/navBar.css">

    <!-- Estilo da página inicial -->
    <link rel="stylesheet" href="../css/paginaInicial.css">
    
    <!-- Estilo dos Cards -->
    <link rel="stylesheet" href="../components/cards.css">
</head>
<body>

    <div class="container">

        <!-- Incluir a navBar -->
        <?php include '../components/navBar.php'; ?>

        <!-- Incluir os Cards -->
        <?php include '../components/cards.php'; ?>
            <div class="card-grid">
                <?php
                renderCard("../cardsImg/portoSeguro.jpg", "Porto Seguro - BH", "Saindo de São Paulo");
                renderCard("../cardsImg/santaCatarina.jpg", "Santa Catarina - RS", "saindo de São Paulo");
                renderCard("../cardsImg/rioDeJaneiro.jpg", "Rio de Janeiro - RJ", "saindo de São Paulo");
                ?>
            </div>
    </div> 
</body>
</html>