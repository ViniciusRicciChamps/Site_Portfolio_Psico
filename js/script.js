
var delayInMilliseconds = 2000; //1 second
var nomeCompletoPaciente;
var emailPaciente;
var idadePaciente;
var telefonePaciente;
var dataNascimentoPaciente;
var dataAgendarSessao;
var generoPaciente;

var botaoAgendarSessao = document.getElementById("botaoAgendar").addEventListener("click", function verificarCampo(params) {

    verificaCamposInput();

});


function verificaCamposInput() {

    nomeCompletoPaciente = document.getElementById("nomeAgendarSessao").value;
    emailPaciente = document.getElementById("emailAgendarSessao").value;
    idadePaciente = document.getElementById("idadeAgendarSessao").value;
    telefonePaciente = document.getElementById("telefoneAgendarSessao").value;
    dataNascimentoPaciente = document.getElementById("nascimentoAgendarSessao").value;
    dataAgendarSessao = document.getElementById("dataAgendarSessao").value;
    generoPaciente = document.getElementById("generoSessao").value;

    toString(idadePaciente);
    toString(telefonePaciente);
    toString(dataNascimentoPaciente);
    toString(dataAgendarSessao);

    if (generoPaciente == "" || nomeCompletoPaciente == "" || emailPaciente == "" || idadePaciente == "" || telefonePaciente == "" || dataNascimentoPaciente == "" || dataAgendarSessao == "") {

        document.getElementById("alerta").className = "alert alert-dismissible alert-danger";
        var textoStrongCaixaAlerta = document.getElementById("strongTextoAlerta");
        textoStrongCaixaAlerta.innerText = "ATENÇÃO! Preencher os campos branco!";
    }
    else {
        document.getElementById("alerta").className = "alert alert-dismissible alert-success";
        var textoStrongCaixaAlerta = document.getElementById("strongTextoAlerta");
        textoStrongCaixaAlerta.innerText = "Agendamento efetuado com sucesso! Aguardar retorno com maiores informações";
        callPhp();


    }

}


function callPhp() {
    // function below will run clear.php?h=michael
    $.ajax({
        type: "POST",
        url: "validarBancoDados.php",
        Cache: false,
        data: { nomeAgendarSessao: nomeCompletoPaciente, emailAgendarSessao: emailPaciente, idadeAgendarSessao: idadePaciente, telefoneAgendarSessao: telefonePaciente, nascimentoAgendarSessao: dataNascimentoPaciente, dataAgendarSessao: dataAgendarSessao, generoSessao: generoPaciente },
        success: function (response) {
            $('#result').html(response);
            console.log(response);
        },
        error: function (xhr, status, error) {
            console.error(xhr);
        }
    });
}






