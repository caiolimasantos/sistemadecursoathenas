<?php include_once("./config/config.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo . " - Login" ?></title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="shortcut icon" href="../src/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <main>
        <img src="src/logo.png" alt="Athenas Academy">
        <form name="form_login" id="form_login" action="config/login.php" method="post">
            <div id="user-container">
                <div><label for="usuario">Usuario</label></div>
                <input type="text" id="usuario" name="usuario" placeholder="Seu usuario aqui" autocomplete="username">
            </div>
            <div id="password-container">
                <div><label for="senha">Senha</label></div>
                <input type="password" id="senha" name="senha" placeholder="Sua senha aqui" autocomplete="current-password">
            </div>
            <div id="button" style="display: block;">
                <button type="submit" id="button-submit">Entrar</button>
            </div>
        </form>
    </main>
    <script src="js/login.js"></script>
</body>
</html>
