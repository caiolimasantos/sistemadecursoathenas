<?php 
    $host = "";
    $port = 3306;
    $username = "";
    $password = "";
    $database = "";

    $strcon = mysqli_connect($host, $username, $password, $database, $port);

    
    if($strcon -> connect_errno){
        die("Erro CE1");
    }
    
?>
