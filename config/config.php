<?php 
    include_once ("conexao.php");
    $nomeinstuicao="Athenas Academy &copy";
    $titulo="Athenas Academy";

    /*Comandos SQL*/
    $sql_code = "SELECT * FROM usuarios";
    $sql_querry = $strcon->query($sql_code) OR die("CE2". $strcon->error);
    $dados = $sql_querry->fetch_assoc();
    
    
?>