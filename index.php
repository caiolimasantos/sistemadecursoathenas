<?php include_once("./config/config.php"); include_once("./config/login.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo." - Login"?></title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="shortcut icon" href="../src/favicon.ico" type="image/x-icon">
</head>
<body>
    <main>
        <img src="src/logo.png" alt="Athenas Academy">
        <form action="config/login.php" method="post">
            <div id="user-container">
                <div><label for="usuario">Usuario</label></div>
                <input type="text" id="usuario" name="usuario" placeholder="Seu usuario aqui" required>
            </div>
            <div id="password-container">
                <div><label for="senha">Senha</label></div>
                <input type="password" id="senha" name="senha" placeholder="Sua senha aqui" autocomplete="none" required>
            </div>
            <div id="button">
                <button type="submit" id="button-submit">Entrar</button>
            </div>
            <!--TO DO
            <div>
                /*<?php echo @$errologin;?>*/
            </div>
            -->
        </form>
    </main>
    <script src="js/login.js"></script>
</body>
</html>

<!--https://www.youtube.com/watch?v=nW9d3n1Sptc&list=PLmY5AEiqDWwAnRZ13GdtiSF9yAmoT5LL_&index=9-->