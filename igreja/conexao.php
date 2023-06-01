<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$database = "renato";


$conexao = mysqli_connect($servername,$username,$password,$database);

/* Checar a conexão */

if (mysqli_connect_errno()){

print("A conexão falhou!".mysql_connect_error());
exit();


}
?>
