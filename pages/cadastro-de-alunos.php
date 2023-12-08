<?php

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['id'])) {
    session_destroy();
    header("location: ../index.php");
}
include_once("../config/config.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head><?php include("../inc/head.php") ?></head>
<?php include("../inc/datalist.php") ?>

<body>
    <header><?php include("../inc/adm/header.php") ?></header>
    <main id="main-cd">
        <section id="section-cd">
            <h1><i class="fas fa-user-friends"></i>Cadastro de Alunos</h1>
            <button class="btncad" id="lia"><i class="fas fa-list" style="margin-right: 2px;"></i>Listar Alunos</button>
        </section>
        <div id="tabs">
            <div class="tab-link">
                <button data-id="dados">Dados Alunos</button>
                <button data-id="cursos">Cursos</button>
                <button data-id="conf">Configurações</button>
            </div>
        </div>
        <hr />
        </div>
        <form action="../config/cadastro.php" method="post">
            <div class="content">
                <div id="dados">
                    <!--SECAO DADOS-->
                    <article id="data">
                        <div class="secao">
                            <section id="colum1">
                                <div><label for="nome">Nome:</label></div>
                                <div><input type="text" name="nome" id="nome" class="ip"></div>
                                <div><label for="email">Email:</label></div>
                                <div><input type="email" name="email" id="email" class="ip"></div>
                                <div><label for="cpf">CPF:</label></div>
                                <div><input type="text" name="cpf" id="cpf" class="ip"></div>
                                <div><label for="pais">País:</label></div>
                                <div><select name="pais" id="pais" class="ip select">
                                        <?php pais(); ?>
                                    </select></div>
                                <div><label for="cidade">Cidade:</label></div>
                                <div><select name="cidade" id="cidade" class="ip select"><?php cidade(); ?></select>
                                </div>
                                <div><label for="login">Login:</label></div>
                                <div><input type="text" name="login" id="login" class="ip"></div>
                            </section>
                        </div>
                        <div class="secao">
                            <section id="colum2">
                                <div><label for="dtn">Data de Nasc:</label></div>
                                <div><input type="date" name="dtn" id="dtn" class="ip"></div>
                                <div><label for="telefone">Telefone:</label></div>
                                <div><input type="tel" name="telefone" id="telefone" class="ip"></div>
                                <div><label for="rg">RG:</label></div>
                                <div><input type="text" name="rg" id="rg" class="ip"></div>
                                <div><label for="estado">Estado:</label></div>
                                <div><select name="estado" id="estado" class="ip select"><?php estados(); ?></select>
                                </div>
                                <div><label for="endereco">Endereço:</label></div>
                                <div><input type="text" name="endereco" id="endereco" class="ip"></div>
                                <div><label for="senha">Senha:</label></div>
                                <div><input type="text" name="senha" id="senha" class="ip"></div>
                            </section>
                        </div>
                    </article>
                </div>
                <div id="cursos">
                    <!--SECAO CURSOS-->
                    <div id="tab-curso"><?php showCourse() ?></div>
                </div>
                <div id="conf">
                    <!--SECAO CONFIG-->
                    <article id="data">
                        <div class="secao">
                            <section id="colum1">
                                <div><label for="libertest">Liberar Teste</label></div>
                                <div><select name="libertest" id="libertest" class="ip select">
                                        <option value="0">Padrão</option>
                                        <option value="1">Sim</option>
                                        <option value="2">Não</option>
                                    </select>
                                </div>
                            </section>
                        </div>
                        <div class="secao">
                            <section id="colum2">
                                <div><label for="auladia">Quantidade de Aulas:</label></div>
                                <div><select name="auladia" id="auladia" class="ip select">
                                        <option value="0">Ilimitado</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </section>
                        </div>
                </div>
                </article>

            </div>
        <section id="section-btn">
            <button class="btncad" id="cancel" type="reset"><i class="fas fa-ban" style="margin-right: 2px;"></i>Cancelar</button>
            <button class="btncad" id="avan" type="submit"><i class="fas fa-save" style="margin-right: 2px;"></i>Cadastrar</button>
        </section>
        </form>
    </main>
    <footer><?php include("../inc/footer.php") ?></footer>

    <script src="../js/funcao.js"></script>
    <script src="../js/scriptcadastro.js"></script>
</body>

</html>