var botaoAgendarSessao = document.getElementById("botaoAgendar").addEventListener("click", verificaCamposInput, true);



function verificaCamposInput() {

    var nomeCompletoPaciente = document.getElementById("nomeAgendarSessao").value;
    var emailPaciente = document.getElementById("emailAgendarSessao").value;
    var idadePaciente = document.getElementById("idadeAgendarSessao").value;
    var telefonePaciente = document.getElementById("telefoneAgendarSessao").value;
    var sexoPacienteInput = document.getElementsByName('optionsRadios');
    var dataNascimentoPaciente = document.getElementById("nascimentoAgendarSessao").value;
    var dataAgendarSessao = document.getElementById("dataAgendarSessao").value;
    var generoPaciente = document.getElementById("generoSessao").value;

    toString(idadePaciente);
    toString(telefonePaciente);
    toString(dataNascimentoPaciente);
    toString(dataAgendarSessao);
  


    if (nomeCompletoPaciente == "" || emailPaciente == "" || idadePaciente == "" || telefonePaciente == "" || dataNascimentoPaciente == "" || dataAgendarSessao == "") {

        document.getElementById("alerta").className = "alert alert-dismissible alert-danger";
        var textoStrongCaixaAlerta = document.getElementById("strongTextoAlerta");
        textoStrongCaixaAlerta.innerText = "ATENÇÃO! Preencher os campos branco!";
    }
    else {
        document.getElementById("alerta").className = "alert alert-dismissible alert-success";
        var textoStrongCaixaAlerta = document.getElementById("strongTextoAlerta");
        textoStrongCaixaAlerta.innerText = "Agendamento efetuado com sucesso! Aguardar retorno com maiores informações";
        
    }
}




