<?php

$servername = "localhost";
$username = "Renato";
$password = "1234";
$database = "Renato";


$conexao = mysqli_connect($servername,$username,$password,$database);

/* Checar a conexão */

if (mysqli_connect_errno()){

print("A conexão falhou!".mysql_connect_error());
exit();


}
?>
