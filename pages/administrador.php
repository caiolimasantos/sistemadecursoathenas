<?php

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['id'])) {
    session_destroy();
    header("location: ../index.php");
}
include_once("../config/config.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head><?php include("../inc/head.php")?></head>
<body>
    <header><?php include("../inc/adm/header.php")?></header>
    <main>
    <section id="geralconteudo">
            <div id="button">
                <button id="lta" class="btn"><i class="bi bi-list-task icons"></i><br><span class="text-btn icons">Listar Alunos</span></button>
                <button id="cda" class="btn"><i class="fas fa-plus-square icons"></i><br><span class="text-btn icons">Cadastrar Alunos</span></button>
                <button class="btn"><i class="fas fa-id-badge icons"></i><br><span class="text-btn icons">Colaboradores</span></button>
            </div>
    </section>
    </main>
    <footer><?php include("../inc/footer.php")?></footer>
    <script src="../js/funcao.js"></script>
    <script src="../js/scriptadmin.js"></script>
</body>

</html>