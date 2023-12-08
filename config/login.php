<?php
    require_once("config.php");
    if(isset($_REQUEST['usuario']) OR isset($_REQUEST['senha'])){
            $usuario = $strcon->real_escape_string($_REQUEST['usuario']);
            $senha = $strcon->real_escape_string($_REQUEST['senha']);
            /*Comandos Sql */
            $sql_code = "SELECT * FROM usuarios WHERE USUARIO = '$usuario' AND SENHA = '$senha'";
            $sql_querry = $strcon->query($sql_code) OR die("CE2". $strcon->error);
            $quantidade_numrow = $sql_querry->num_rows;
            
        if ($quantidade_numrow == 1){
                $dados = $sql_querry->fetch_assoc();
                extract($dados);
                switch ($nivelpermissao){
                    case 1:
                        if(!isset($_SESSION)){
                            session_start();
                        }   
                        $_SESSION['id'] = $ID;
                        $_SESSION['nome'] = $NOME;
                        header("location: ../pages/administrador.php");
                        break;
                    case 3:
                        if(!isset($_SESSION)){
                            session_start();
                        } 
                        $_SESSION['id'] = $ID;
                        $_SESSION['nome'] = $NOME;
                        header("location: ../pages/professor.php");
                        break;
                    case 4:
                        if(!isset($_SESSION)){
                            session_start();
                        } 
                        $_SESSION['id'] = $ID;
                        $_SESSION['nome'] = $NOME;
                        header("location: ../pages/alunos.php");
                        break;
                    default:
                        echo "CE3";
                }
            }else {
                $errologin = "Usuario ou Senha Incorreto!";
                header("location: ../index.php");
            }
           /*}*/
/*
            if($usuario=="admin"){
                $sql_code = "SELECT * FROM colaboradores WHERE USUARIO = '$usuario' AND SENHA = '$senha'";

                $sql_querry = $strcon->query($sql_code) OR die("Falha na execuçao do codigo SQL". $strcon->error);


                if($quantidade == 1){
                    $usuario = $sql_querry->fetch_assoc();
    
                    if(!isset($_SESSION)){
                        session_start();
                    } 
                    
                    $_SESSION['id'] = $usuario['ID'];
                    $_SESSION['nome'] = $usuario['NOME'];

                    header("location: ./pages/administrador.php");
                }else{
                    $errologin = "<strong>Falha ao logar, Usuario ou Senha incorreto!</strong>";
                }

            }else{
                $sql_code = "SELECT * FROM usuarios WHERE USUARIO = '$usuario' AND SENHA = '$senha'";
                $sql_querry = $strcon->query($sql_code) OR die("Falha na execuçao do codigo SQL". $strcon->error);

                $quantidade = $sql_querry->num_rows;

                if($quantidade == 1){
                    $usuario = $sql_querry->fetch_assoc();

                    if(!isset($_SESSION)){
                        session_start();
                    } 
                    
                    $_SESSION['id'] = $usuario['ID'];
                    $_SESSION['nome'] = $usuario['NOME'];

                    
                    header("location: ./pages/alunos.php");
                }else{
                    $errologin = "<strong>Falha ao logar! Usuario ou senha Incorreto!</strong>";
                }
            }*/
            
        }
?>