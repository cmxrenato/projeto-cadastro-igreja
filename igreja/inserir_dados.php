
 <?php  
  
  /* require com o arquivo entre aspas simples*/
  
 require 'conexao.php';  
 
  $nome = $_POST["nome"];
  $telefone = $_POST["telefone"];
  $email = $_POST["email"];
  $data_de_nascimento = $_POST["data_de_nascimento"];
  
  /*Verificação para não repetir o mesmo usuário cadastrado*/
  
  $listagem = mysqli_query($conexao, "SELECT * FROM novos_membros");
  $linha = mysqli_fetch_array($listagem);
      
      while ($linha = mysqli_fetch_array($listagem)){
		  
		  if ($email == $linha['email']){
				
				
				
				header('location:pagina_user_repetido.php');
				
				
				mysqli_close($conexao);
				
			
			
			
		}
		  
	  }
 
	  /*Insere os dados no banco*/
	  
	  
	  $sql = "INSERT INTO novos_membros(nome,telefone,email,data_de_nascimento) 
				VALUES('$nome','$telefone','$email','$data_de_nascimento')";
		
				mysqli_query($conexao,$sql);
		
		
				header('location:pagina_sucesso.php');
  

		
  
  
  ?>
