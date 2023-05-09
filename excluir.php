

<?php

require 'conexao.php';

  $variavel = $_GET['email'];

$sql = "DELETE FROM novos_membros WHERE email = '$variavel'";

mysqli_query($conexao,$sql);

header('location:listar.php');

?>
