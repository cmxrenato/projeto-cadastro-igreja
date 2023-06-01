<?php 
  
   
  
  $nome = $_POST["nome"];
  $telefone = $_POST["telefone"];
  $email = $_POST["email"];
  $aniversario = $_POST["aniversario"];
  
  echo "<h3>Dados do membro:</h3> <br/>"; 
  echo ("Nome : ".$nome."<br/>");
  echo ("Telefone : ".$telefone."<br/>");
  echo ("Email : ".$email."<br/>");
  echo ("Data de Nascimento : ".$aniversario);
  
  
  ?>
