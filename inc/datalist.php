<?php

function conexao($querry)
{
    require("../config/conexao.php");
    $result = mysqli_query($strcon, $querry);
    return $result;
}

function pais()
{
    $responde = conexao("SELECT * FROM paises");
    if (mysqli_num_rows($responde) > 0) {
        while ($row = mysqli_fetch_array($responde)) {
            echo "<option value='" . $row["ID"] . "'>" . $row["SIGLA"]." - ".$row["PAIS"] . "</option>";
        }
    }
}
function estados()
{
    $responde = conexao("SELECT * FROM paises INNER JOIN estados ON paises.ID = estados.COD_PAIS");
    if (mysqli_num_rows($responde) > 0) {
        while ($row = mysqli_fetch_array($responde)) {
            
            echo "<option value='" . $row["ID"] . "'>" . $row["SGL_ESTADO"]." - ".$row["DSC_ESTADO"] . "</option>";
        }
    }
}
function cidade(){
    $responde = conexao("SELECT * FROM cidades");
    if (mysqli_num_rows($responde) > 0) {
        while ($row = mysqli_fetch_array($responde)) {
            
            echo "<option value='" . $row["ID"] . "'>" . $row["DSC_CIDADE"] . "</option>";
        }
    }
}
function showCourse(){
    $responde = conexao("SELECT * FROM curso");
    if (mysqli_num_rows($responde) > 0) {
        while ($row = mysqli_fetch_array($responde)) {
            echo '<div class="div-curso"><input type="checkbox" class="curso-checkbox" name="curso" value="'.$row["ID"].'" id="'.$row["ID"].'">'.'<label class="curso-label" for="'.$row["ID"].'">'.$row["CURSO"].' - '.$row["CARGA"].' Horas</label></div>';
        }
    }
}
?>

