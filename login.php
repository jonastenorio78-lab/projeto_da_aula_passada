<?php
//incluindo o arquivo de conexão para utilizar a variaveis que contem a conexão
include 'conexao.php';

//trazer os dados do formulario
$email = $_POST['email'];
$senha = $_POST['senha'];


//guardando instrução sql dentro da variavel $select
$select = "SELECT * FROM TB_USUARIO WHERE EMAIL = '$email' AND senha = '$senha'";

//utilizar a função query() para executar a instrução sql vindo da variavel $select
$query = $conexao->query($select);

//utilizar a função fetch_assoc() para pegar o resultado do select
$result = mysqli_fetch_assoc($query);

$email_banco = $result['email'];
$senha_banco = $result['senha'];

if ($email == $email_banco && $senha == $senha_banco) {

session_start();
$_SESSION['email'] = $senha_banco;
$_SESSION['nome'] = $result['NM_USUARO'];

header("Location: ../home.html");

}
print_r($result);


?>