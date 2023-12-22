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

<head><?php include("../inc/head.php") ?></head>

<body>
    <?php include("../inc/datalist.php") ?>
    <header><?php include("../inc/adm/header.php") ?></header>
    <main>
        <section id="geralconteudo">
            <table>
                <thead>
                    <tr>
                        <th scope="col" width="20" class="text-center">ID</th>
                        <th scope="col">Nome do Aluno </th>
                        <th scope="col" width="75" style="text-align: center">DN</th>
                        <th scope="col">Email</th>
                        <th scope="col" width="85">Login</th>
                        <th scope="col" width="85">Senha</th>
                        <th width="20">Status</th>
                        <th scope="col" width="150"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php listaAlunos()?>
                </tbody>
            </table>
        </section>
    </main>
    <footer><?php include("../inc/footer.php") ?></footer>
    <script src="../js/funcao.js"></script>
</body>

</html>