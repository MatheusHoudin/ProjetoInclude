<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "meus_contatos";

$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
	echo "Falha na conexao com o BD";
}

?>