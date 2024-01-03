const logoutButton = document.getElementById("logout");
const cadastrarAlunoButton = document.getElementById("cda");
const listarAlunoButton = document.getElementById("lta");
function cadastrarAluno(){
    window.location.href="/pages/cadastro-de-alunos.php"
}
function logout(){
    window.location.href="/config/logout.php"
}
function listarAlunos(){
    window.location.href="/pages/lista-alunos.php"
}
logoutButton.addEventListener("click", logout);
listarAlunoButton.addEventListener("click", listarAlunos);
cadastrarAlunoButton.addEventListener("click", cadastrarAluno);

