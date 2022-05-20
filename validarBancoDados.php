<?php

$nomePaciente = $_POST["nomeAgendarSessao"];
$emailPaciente = $_POST["emailAgendarSessao"];
$idadePaciente = $_POST["idadeAgendarSessao"];
$telefonePaciente = $_POST["telefoneAgendarSessao"];
$dataNascPaciente = $_POST["nascimentoAgendarSessao"];
$dataAgendamentoPaciente = $_POST["dataAgendarSessao"];
$sexoPaciente = $_POST["generoSessao"];



$nomeServidor = "localhost";
$nomeUsuario = "root";
$senhaAcessoBD = "";
$baseDados = "basedadossitepsico";

$conn = new mysqli($nomeServidor, $nomeUsuario, $senhaAcessoBD, $baseDados);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {

  $sql = "INSERT INTO tabela_pacientes (nome_Paciente, email_Paciente, idade_Paciente, telefone_Paciente, sexo_Paciente, data_Nascimento_Paciente, data_Agendamento_Paciente)
VALUES ('$nomePaciente', '$emailPaciente', '$idadePaciente', '$telefonePaciente', '$sexoPaciente', '$dataNascPaciente', '$dataAgendamentoPaciente')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
