<?php 
    $host = "dk.athenasacademy.com.br";
    $port = 3306;
    $username = "athena85_sistemacurso";
    $password = "417782Ja@";
    $database = "athena85_sistemacurso";

    $strcon = mysqli_connect($host, $username, $password, $database, $port);

    
    if($strcon -> connect_errno){
        die("Erro CE1");
    }
    
?>
