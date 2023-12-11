/*function checaCadAlunos() {
    var d = document.cadastro_alunos;
    var titulo = "Campo Obrigatório."

    if (d.nome.value == "") {
      swal.fire({
        title: titulo,
        html: "O campo  " + d.nome.name + " deve ser preenchido",
        allowOutsideClick: false
      }).then(function(result) {
        document.getElementById('dados').click();
        d.nome.focus();
      });
      return false;
    }

    //validar email(verificao de endereco eletronico)
    if (d.email.value !== "") {
      parte1 = d.email.value.indexOf("@");
      parte2 = d.email.value.indexOf(".");
      parte3 = d.email.value.length;
      if (!(parte1 >= 3 && parte2 >= 3 && parte3 >= 3)) {
        swal.fire({
          title: titulo,
          html: "O campo email deve ser conter um endereço eletrônico válido!",
          allowOutsideClick: false
        }).then(function(result) {
          document.getElementById('dados').click();
          d.fone.focus();
        });
        d.email.focus();
        return false;
      }
    }


    //validar telefone
    if (d.telefone.value == "") {
      swal.fire({
        title: titulo,
        html: "O campo Telefone deve ser preenchido.",
        allowOutsideClick: false
      }).then(function(result) {
        document.getElementById('dados').click();
        d.fone.focus();
      });
      return false;
    }

    //validar estado
    if (d.estado.value == "" || d.estado.value == 0) {
      swal.fire({
        title: titulo,
        html: "O campo Estado deve ser preenchido.",
        allowOutsideClick: false
      }).then(function(result) {
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
      }).then(function(result) {
        document.getElementById('dados').click();
        d.listCidades.focus();
      });
      return false;
    }

    //validar endereco
    /*if (d.endereco.value == ""){
		swal({
            title: titulo,
            html: "O campo Endereço deve ser preenchido.",
                            allowOutsideClick: false            
            }).then(function(result) {
              document.getElementById('nav-home-tab').click();
              d.endereco.focus();
            });
		return false;
	}*/

    //validar login
   /* if (d.login.value == "") {
      swal.fire({
        title: titulo,
        html: "O campo Login deve ser preenchido.",
        allowOutsideClick: false
      }).then(function(result) {
        document.getElementById('dados').click();
        d.login_.focus();
      });
      return false;
    }

    //validar senha
    if (d.senha.value == "") {
      swal.fire({
        title: titulo,
        html: "O campo Senha deve ser preenchido.",
        allowOutsideClick: false
      }).then(function(result) {
        document.getElementById('dados').click();
        d.senha.focus();
      });
      return false;
    }
/*
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
  }

  $("#modulo_1").change(function() {
    if (this.checked) {
      v = true;
    } else {
      v = false;
    }
    chs = $(".chM").get();
    for (i = 0; i < chs.length; i++) chs[i].checked = v;
  });

  }


  /*function mascaraForm() {
    $(document).ready(function() {

        $('#dtn').mask('99/99/9999');
       /* $('#dataini').mask('99/99/9999');
        $('#datafim').mask('99/99/9999');
        $('#telefone').mask("(99) 9999-9999?9");
        $('form').on('focusout', '#telefone', function(event) {
          var target, phone, element;
          target = (event.currentTarget) ? event.currentTarget : event.srcElement;
          phone = target.value.replace(/\D/g, '');
          element = $(target);
          element.unmask();
          if (phone.length > 10) {
            element.mask("(99) 99999-999?9");
          } else {
            element.mask("(99) 9999-9999?9");
          }
        });
        $('#cpf').mask('999.999.999-99');
    
       /* $('#posdata').mask('99/99/9999');
        $('#poshora').mask('99:99');
    
      });
    
      function SomarData(txtData, DiasAdd) {
        var d = new Date();
        d.setTime(Date.parse(txtData.split("/").reverse().join("/")) + (86400000 * (DiasAdd)))
        var DataFinal;
        if (d.getDate() < 10) {
          DataFinal = "0" + d.getDate().toString();
        } else {
          DataFinal = d.getDate().toString();
        }
        if ((d.getMonth() + 1) < 10) {
          DataFinal += "/0" + (d.getMonth() + 1).toString() + "/" + d.getFullYear().toString();
        } else {
          DataFinal += "/" + ((d.getMonth() + 1).toString()) + "/" + d.getFullYear().toString();
        }
        return (DataFinal);
}*/
