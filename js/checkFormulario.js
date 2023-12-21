function checaCadAlunos() {
  var d = document.cadastro_alunos;
  var titulo = "Campo Obrigatório."

  if (d.nome.value == "") {
    swal.fire({
      title: titulo,
      html: "O campo  " + d.nome.name + " deve ser preenchido",
      allowOutsideClick: false
    }).then(function (result) {
      document.getElementById('dados').click();
      d.nome.focus();
    });
    return false;
  }

  //validar email(verificao de endereco eletronico)
  if (d.email.value == "") {
    //if (d.email.value !== "") {
    //parte1 = d.email.value.indexOf("@");
    //parte2 = d.email.value.indexOf(".");
    //parte3 = d.email.value.length;
    //if (!(parte1 >= 3 && parte2 >= 3 && parte3 >= 3)) {
    swal.fire({
      title: titulo,
      html: "O campo email deve ser conter um endereço eletrônico válido!",
      allowOutsideClick: false
    }).then(function (result) {
      document.getElementById('dados').click();
      d.email.focus();
    });
    d.email.focus();
    return false;
    //}
  }

  //validar telefone
  if (d.telefone.value == "") {
    swal.fire({
      title: titulo,
      html: "O campo Telefone deve ser preenchido.",
      allowOutsideClick: false
    }).then(function (result) {
      document.getElementById('dados').click();
      d.fone.focus();
    });
    return false;
  }

  //validar cpf
  if (d.cpf.value == "") {
    swal.fire({
      title: titulo,
      html: "O campo Cpf deve ser preenchido.",
      allowOutsideClick: false
    }).then(function (result) {
      document.getElementById('dados').click();
      d.cpf.focus();
    });
    return false;
  }

  //validar estado
  if (d.estado.value == "" || d.estado.value == 0) {
    swal.fire({
      title: titulo,
      html: "O campo Estado deve ser preenchido.",
      allowOutsideClick: false
    }).then(function (result) {
      document.getElementById('dados').click();
      d.listEstados.focus();
    });
    return false;
  }

  //validar cidade
  if (d.cidade.value == "" || d.cidade.value == 0) {
    swal.fire({
      title: titulo,
      html: "O campo Cidade deve ser preenchido.",
      allowOutsideClick: false
    }).then(function (result) {
      document.getElementById('dados').click();
      d.listCidades.focus();
    });
    return false;
  }

  //validar endereco
  if (d.endereco.value == ""){
  swal.fire({
          title: titulo,
          html: "O campo Endereço deve ser preenchido.",
          allowOutsideClick: false            
          }).then(function(result) {
            document.getElementById('dados').click();
            d.endereco.focus();
          });
  return false;
}

  //validar login
  if (d.login.value == "") {
    swal.fire({
      title: titulo,
      html: "O campo Login deve ser preenchido.",
      allowOutsideClick: false
    }).then(function (result) {
      document.getElementById('dados').click();
      d.login.focus();
    });
    return false;
  }

  //validar senha
  if (d.senha.value == "") {
    swal.fire({
      title: titulo,
      html: "O campo Senha deve ser preenchido.",
      allowOutsideClick: false
    }).then(function (result) {
      document.getElementById('dados').click();
      d.senha.focus();
    });
    return false;
  }
  
  /* ----------------------------------------------
  //validar se o final do curso eh maior do que a data de inicio
  var inicio = new Date();
  inicio.setFullYear(d.yini.value, (d.mini - 1).value, d.dini.value);
  var fim = new Date();
  fim.setFullYear(d.yfim.value, (d.mfim - 1).value, d.dfim.value);
  if (inicio >= fim) {
    swal({
      title: titulo,
      html: "A Data Fim deve ser maior que a Data Início",
      allowOutsideClick: false
    }).then(function(result) {
      document.getElementById('nav-home-tab').click();
      d.dfim.focus();
    });
    return false;
  }
  return true;
}*/

}
