<?php 
    $host = "192.168.0.21";
    $port = 3306;
    $username = "athenas";
    $password = "417782Ja@";
    $database = "athenas";

    $strcon = mysqli_connect($host, $username, $password, $database, $port);

    
    if($strcon -> connect_errno){
        die("Erro CE1");
    }
    
?>
