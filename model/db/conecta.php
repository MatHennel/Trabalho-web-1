<?php
//realiza a conexão com o mySql
$conexao = mysqli_connect("localhost","root","");
//identifica a base de dados
$bancodedados = "LOJA";
//conecta mySql e base de dados
$bd = mysqli_select_db($conexao,$bancodedados);
if (mysqli_connect_errno()){
    printf("Falha na conexão: %s\n,", mysqli_connect_errno());
    die();
}
?>