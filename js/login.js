const user = document.getElementById("usuario");
const password = document.getElementById("senha");
const userContainer = document.getElementById("user-container");
const passwordContainer = document.getElementById("password-container");
const buttonContainer = document.getElementById("button-submit");



buttonContainer.addEventListener("click", function() {
  var user = $('#usuario').val()
  var password = $('#senha').val
  var d = document.form_login;
  if (d.usuario.value == '') {
      Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "O usuarios deve estar prenchido!",
      }).then(function(result) {
          $('#usuario').click();
          d.usuario.focus();
      });
      return false;
  } //
  if (d.senha.value == '') {
      Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "A senha deve estar prenchido!",
      }).then(function(result) {
          $('#senha').click();
          d.senha.focus();
      });
      return false;
  } 
})





