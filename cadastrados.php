
<html>
 
 <head>
   <link rel="icon" type="imagem/png" href="5.png" />

 
   <link rel="shortcut icon" href="/favicon.ico" type="4.png" />
   <link rel="icon" type="imagem/png" href="/imagens/meufavicon.png" />
 
 
 <!-- BootsTrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
 <!-- BootsTrap -->
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <meta charset="UTF-8"/>
 <title>LS SEGUROS- 2022</title>
 </head>
 <body >
  <link rel="stylesheet" type="text/css" href="style1.css">  
    
 <link href="https://fonts.googleapis.com/css?family=Oswald"    rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
  
  
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
         <script src="booklet/jquery.easing.1.3.js" type="text/javascript"></script>
         <script src="booklet/jquery.booklet.1.1.0.min.js" type="text/javascript"></script>
 
         <link href="booklet/jquery.booklet.1.1.0.css" type="text/css" rel="stylesheet" media="screen" />
         <header id="cima">
         <main class="estrutura">  
<nav  class="navbar navbar-light bg-light">
 <div style="margin: 0px; padding: 0px; " class="container">
         <ul class="nav">
         
           <li class="nav-item">
           <a class="nav-link" href="index.php">Início</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="formulario.php">Cadastro</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="cadastrados.php">Cadastrados</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="googlemaps.php"> Google Maps</a>
           </li>
         </ul>
     </nav>

   </div>
 </div>
</header>
<title>CADASTRADOS</title>
</head>

<body>
<?php
   

   $pesquisa = $_POST['busca'] ?? '';
   include "conexao.php";
   $sql = "SELECT * FROM  cadastro";
   $dados = mysqli_query($conexao, $sql);

   ?>
    <main>

      <div class="textocentrocontainer1">
          <h2 class="titulo">CADASTRADOS </h2>
      </div>


<div class="lista">
<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">nome</th>
      <th scope="col">senha</th>
      <th scope="col">email</th>
      <th scope="col">telefone</th>
      <th scope="col">cidade</th>
      <th scope="col">endereco</th>      
    </tr>
  </thead>
  <tbody>
    
  <?php
  while ($linha = mysqli_fetch_assoc($dados)){
    $cod = $linha['cod'];
    $nome = $linha['nome'];
    $senha = $linha['senha'];
    $email = $linha['email'];
    $telefone = $linha['telefone'];
    $cidade = $linha['cidade'];
    $endereco = $linha['endereco'];
  
    echo "<tr>
        <td scope~'row'>$cod</td>
        <td>$nome</td>
        <td>$senha</td>
        <td>$email</td>
        <td>$telefone</td>
        <td>$cidade</td>
        <td>$endereco</td>
      
        <td>
        <a href='formularioedit.php?id=$cod'  >Editar</a>
        <a  href='excluir.php?id=$cod' >Deletar</a>
        </td>
    </tr>";
}

 ?>
  </tbody>
</table>



</main>
</body>
</html>

