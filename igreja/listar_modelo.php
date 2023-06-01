<?php  
  
  /* require com o arquivo entre aspas simples*/
  
 require 'conexao.php';  
  
    
   
	$listagem = mysqli_query($conexao, "SELECT * FROM novos_membros");  
  
  while ($linha = mysqli_fetch_array($listagem)){
	  
	  echo "<h3>Membro:</h3> <br/>";
	  echo "NOME: ".$linha['nome']."<br/>";
	  echo "TELEFONE: ".$linha['telefone']."<br/>";
	  echo "EMAIL: ".$linha['email']."<br/>";
	  echo "DATA DE NASCIMENTO: ".$linha['data_de_nascimento']."<br/>";
	  
	  echo "<br/>";
	  
  }

  
  ?>
