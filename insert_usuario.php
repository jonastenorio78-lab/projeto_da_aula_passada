<?php
//incluindo o arquivo de conexão para utilizar a variaveis que contem a conexão
include 'conexao.php';

//trazer os dados do formulario
$nomeCompleto = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmarSenha = $_POST['confirmar_senha'];

//variavel com a instrução sql
$insert = "INSERT INTO TB_USUARIO VALUES (NULL, '$nomeCompleto', '$email', '$senha')";

//utilizar a funcção query() para inserir está instrução sql da variavel $insert

$query = $conexao->query($insert);

if ($query == true) {
    echo "<script> alert('Cadastro realizado com sucesso'); history.back(); </script>";
}




?>