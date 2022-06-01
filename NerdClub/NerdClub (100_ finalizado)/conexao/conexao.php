<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$banco = "bdnerdclub";

$mensa = "";
$conexao = mysqli_connect($host, $user, $pass, $banco);
if(!$conexao){
    $mensa = "Erro ao conectar o banco de dados";
}else{
    $mensa = "Banco de dados conectado com sucesso";
    mysqli_select_db($conexao, $banco);
}
?>