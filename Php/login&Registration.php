<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../Css/login&Registration.css">
    <title>Login & register</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST">
                <h1>Criar uma Conta</h1>    
                <input type="text" placeholder="Nome" required>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Senha" required>
                <button>Registrar-se</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="POST" action="login&Registration.php">
                <h1>Entrar</h1>
                <input type="email" placeholder="Email" required name="email">
                <input type="password" placeholder="Senha" required name="password">
                <a href="#">Esqueceu sua senha?</a>
                <button type="submit" value="Login" name="btnLogin">Login</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem-Vindo Novamente!</h1>
                    <p>Clique no botão abaixo <br> para entrar em sua conta</p>
                    <button class="hidden" id="login">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá Amigo!</h1>
                    <p>Ainda não tem uma conta? <br> Clique no botão abaixo para cria uma</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../JS/login&Registration.js"></script>
</body>

</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "atlaslogin");

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

if (isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta SQL para verificar se o e-mail existe
    $sql = "SELECT * FROM logindetails WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $resultPassword = $row['password'];

        // Verificar a senha
        if ($password === $resultPassword) {
            header('Location: index.html');
            exit();
        } else {
            echo "<script>alert('Senha incorreta');</script>";
        }
    } else {
        echo "<script>alert('Usuário não encontrado');</script>";
    }
}
?>

