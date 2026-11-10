<?php
//Variaveis
$server = 'localhost';
$User = 'root';
$password = 'admin';
$database = 'db_notas';


$conexao = new mysqli($server, $User, $password, $database );
if ($conexao == false) {
 die ('erro na conexão');
}
?>