const logoutButton = document.getElementById("logout");
const cadastrarAlunoButton = document.getElementById("cda");
function cadastrarAluno(){
    window.location.href="/pages/cadastro-de-alunos.php"
}
function logout(){
    window.location.href="/config/logout.php"
}
logoutButton.addEventListener("click", logout);

