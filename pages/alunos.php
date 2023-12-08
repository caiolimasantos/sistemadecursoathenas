<?php

    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['id'])){
        session_destroy();
        header("location: ./index.php");
    }

    include("../config/config.php")

?>
<!DOCTYPE html>
<html lang="pt-br">
<head><?php include("../inc/head.php")?></head>
<body>
<header>    
    <div class="menu">    
        <img src="https://i0.wp.com/athenasacademy.com.br/wp-content/uploads/2019/04/LOGO-PARA-SITE-1.png?fit=279%2C104&ssl=1" alt="Athenas Academy" id="logo">
    </div>
    <div class="menu" id="div-menu">
        <ul>
            <li><a href="" class="itens-menu">Meus Cursos</a></li>
            <li><a class="itens-menu" id="logout">Sair</a></li>
        </ul>
    </div>
</header>
<div id="text-left">
        <img src="http://parceiros.ouromoderno.com.br/images/icones/ead-aluno.png" alt="">
        <h3>Olá, <?php echo $_SESSION['nome'];?></h3>
</div>
<ul id="sub-nav">
    <li><a href="./modulos">Meus cursos</a></li>
    <li><a href="">Avaliações</a></li>
</ul>
<section>
    <table>
        <td>
            <p>Ola</p>
        </td>
        <td>
            <p>Mundo</p>
        </td>
        <td>
            Area dos cursos
        </td>
    </table>
</section>
<footer>
    <p id="nome-aluno"><?php echo "<strong>Aluno:".$_SESSION['nome']."</strong>";?></p>
    <p id="nome-instituicao"><?php echo "<strong>".$nomeinstuicao."</strong>";?></p>
</footer>
<script src="../js/funcao.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../js/test.js"></script>
</body>
</html>