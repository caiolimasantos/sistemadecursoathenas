<?php
include('./config.php');
$dados = [
    $nome=$_REQUEST["nome"],
    $email=$_REQUEST["email"],
    $cpf=$_REQUEST["cpf"],
    $pais=$_REQUEST["pais"],
    $cidade=$_REQUEST["cidade"],
    $login=$_REQUEST["login"],
    $dtn=$_REQUEST["dtn"],
    $telefone=$_REQUEST["telefone"],
    $rg=$_REQUEST["rg"],
    $estado=$_REQUEST["estado"],
    $endereco=$_REQUEST["endereco"],
    $senha=$_REQUEST["senha"],
    $auladia=$_REQUEST["auladia"],

];
extract($dados);
$sql = "INSERT INTO `usuarios`(`NOME`, `EMAIL`, `USUARIO`, `SENHA`, `CPF`, `PAIS`, `CIDADE`, `DTN`, `TELEFONE`, `RG`, `ESTADO`, `ENDERECO`, `AULADIA`, `nivelpermissao`) VALUES
('$nome','$email','$login','$senha','$cpf','$pais','$cidade','$dtn','$telefone','$rg','$estado','$endereco','$auladia','4')";

if(mysqli_query($strcon, $sql)){
    echo "<script>alert('Usuário cadastrado com sucesso!')</script>";
    echo "<script>window.location.href='../pages/cadastro-de-alunos.php'</script>";
} else {
    echo "Error: ". $sql. "<br>". mysqli_error($strcon);
}



?>