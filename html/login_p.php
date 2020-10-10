<?php
session_start();
include('conexao.php');

if(empty($_POST['email_login']) or empty($_POST['senha_login'])) {
    header('Location: login.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['email_login']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha_login']);

$query = "SELECT email, senha FROM funcionario WHERE email = '$usuario' AND senha = '$senha'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

echo $row;

if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: geral.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: login.php');
    exit(); 
}

         



