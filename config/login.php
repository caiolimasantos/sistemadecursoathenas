<?php
require_once("config.php");
$usuario= $_REQUEST['usuario'];
$senha= $_REQUEST['senha'];
/*Comandos Sql */
$sql_code = "SELECT * FROM usuarios WHERE USUARIO = '$usuario' AND SENHA = '$senha'";
$sql_querry = $strcon->query($sql_code) or die("CE2" . $strcon->error);
$quantidade_numrow = $sql_querry->num_rows;

if ($quantidade_numrow == 1) {
    $dados = $sql_querry->fetch_assoc();
    extract($dados);
    switch ($nivelpermissao) {
        case 1:
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $ID;
            $_SESSION['nome'] = $NOME;
            header("location: ../pages/administrador.php");
            break;
        case 3:
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $ID;
            $_SESSION['nome'] = $NOME;
            header("location: ../pages/professor.php");
            break;
        case 4:
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $ID;
            $_SESSION['nome'] = $NOME;
            header("location: ../pages/alunos.php");
            break;
        default:
            echo "CE3";
    };
}else{
    echo "<script>
    function getRoot(){
        var root = document.location.protocol+'//'+document.location.hostname+':'+document.location.port+'/';
        return root
      }
    alert('Usuario ou Senha incorretos!')
    setTimeout(window.location.assign(getRoot()), 5000)
    </script>";
}
?>


