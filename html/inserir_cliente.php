<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, $_POST['nome_cadastro']);
$estado = mysqli_real_escape_string($conexao, $_POST['estado_cadastro']);
$cidade = mysqli_real_escape_string($conexao, $_POST['cidade_cadastro']);
$rua = mysqli_real_escape_string($conexao, $_POST['rua_cadastro']);
$cep = mysqli_real_escape_string($conexao, $_POST['cep_cadastro']);
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone_cadastro']);
$cpf = mysqli_real_escape_string($conexao, $_POST['cadastro_cpf']);

$sql = "INSERT INTO cliente_fisico_juridico (cli_nome, cli_endereco, cli_telefone, cli_fis_cpf) VALUES ('$nome', '$telefone', '$cpf', '$rua')";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_conexao'] = true;
}

$conexao->close();

header('Location: geral.php');
exit;
?>
