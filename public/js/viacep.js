$(document).ready(function () {

  function limpa_formulario_cep() {
    $("#rua").val("");
    $("#bairro").val("");
    $("#cidade").val("");
    $("#uf").val("");
    $("#ibge").val("");
  }

  $("#cep").blur(function () {

    var cep = $(this).val().replace(/\D/g, '');

    if (cep != "") {
      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if (validacep.test(cep)) {
        //Consulta o webservice viacep.com.br/

        //$.getJSON("//cep.republicavirtual.com.br/web_cep.php?cep=" + cep + "&formato=json", function (dados) {
        $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

            if (!("erro" in dados)) {
              //Atualiza os campos com os valores da consulta.
              $("#rua").val(dados.logradouro);
              $("#bairro").val(dados.bairro);
              $("#cidade").val(dados.localidade);
              $("#uf").val(dados.uf);
            } //end if.
        });
      } else {
        limpa_formulario_cep();
        alert("Formato de CEP inválido.");
      }
    }
  });
});
