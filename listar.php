<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Renato Leal">
   
    <title>Membros</title>

     

    

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      
      main{
		
		  
		  }
		  #tabela{
			  
			  
			  
			  }
    </style>

    
    
    <link href="cadastro.css" rel="stylesheet">
  </head>
    <?php  
  
  /* require com o arquivo entre aspas simples*/
  
 require 'conexao.php';  ?>
  
    
   
  
  <body class="text-center">
	  
	
    
<main class="container-fluid">
	

    <img class="mb-4" src="logo-index.png" alt="" width="100" height="150">
    <h1 class="h3 mb-3 fw-normal">Membros:</h1>

    <div class="form-floating">
       <table class="table table-hover" id="tabela">
  <thead>
    <tr>
	  <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Aniversário</th>
    </tr>
  </thead>
  <tbody>
	 <?php 
	 $listagem = mysqli_query($conexao, "SELECT * FROM novos_membros"); 
	 $i = 0;
	 while ($linha = mysqli_fetch_array($listagem)){
		 
		 ?>
		 
    <tr>
      <td><?= $i=$i+1?></td>
      <td><?= $linha['nome']?></td>
      <td><?= $linha['telefone']?></td>
      <td><?= $linha['email']?></td>
      <td><?= $linha['data_de_nascimento']?></td>
      <td><a href="excluir.php?email=<?php echo $linha['email'];  ?>"class="btn btn-outline-danger">Excluir</a></td>
    </tr>
   
    
    <?php
       }
       ?>
    
  </tbody>
</table>
    </div>
    <a href="cadastro.php" class="btn btn-secondary">Voltar</a>
    
   
  
  
  

  
  <p class="mt-5 mb-3 text-muted">&copy; Renato_Leal-2023</p>
  
</main>
 
     

      
  </body>
</html>






































  
  















