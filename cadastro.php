<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Renato Leal">
   
    <title>Cadastro</title>

    

    

    

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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cadastro.css" rel="stylesheet">
  </head>
   
    <?php  
  
  /* require com o arquivo entre aspas simples*/
  
 require 'conexao.php';  
  
  
  
  ?>
  
  
  
  
  
  
  <body class="text-center">
	  
	
    
<main class="form-signin w-100 m-auto">
  <form action = "inserir_dados.php" method= "post">
    <img class="mb-4" src="logo-index.png" alt="" width="100" height="150">
    <h1 class="h3 mb-3 fw-normal">Cadastro para novos membros:</h1>

    <div class="form-floating">
      <input type="text" class="form-control"  placeholder = "Nome" name="nome">
      <label for="floatingInput">Nome completo:</label>
    </div>
    <div class="form-floating">
      <input type="tel" class="form-control"   placeholder="Telefone" name="telefone" pattern="[0-9]{2}[0-9]{5}[0-9]{4}"
       required>
      <label for="floatingTelefone">Telefone:</label>
      <p>Exemplo: 01234567890</p>
    </div>
	<div class="form-floating">
      <input type="email" class="form-control"  name="email" placeholder="name@example.com" required>
      <label for="floatingEmail">Email:</label>
    </div>
    <div class="form-floating">
      <input type="date" class="form-control"  placeholder="Data de Nascimento" name ="data_de_nascimento">
      <label for="floatingInput">Data de nascimento:</label>
    </div>
    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Cadastrar</button>
  
  
  </form>
  
  <a href = "listar.php" class="w-100 btn btn-success">Listar membros</a>
  
 <p class="mt-5 mb-3 text-muted">&copy; Renato_Leal-2023</p>
  
</main>


      
  </body>
</html>
