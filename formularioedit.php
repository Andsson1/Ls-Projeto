
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
    <title>ALTERAÇÃO CADASTRO - 2022</title>
    </head>
    <body>
    <?php
include 'conexao.php';
$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM cadastro WHERE cod = $id";

$dados = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_assoc($dados);
?>
<?php
   

        $pesquisa = $_POST['busca'] ?? '';

        include "conexao.php";

        $sql = "SELECT * FROM  cadastro";

        $dados = mysqli_query($conexao, $sql);

        ?>
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
</main>
<!-- Segunda Seleção -->
<section >
<main class="estrutura">
  <div class="section">
    <h1 id="tittle"> LS Seguros </h1>

    <div class="section">
    <span class="escrita">
    </span>
      <div class="box">
        <form action="edit.php" method="POST">
            <fieldset>
                <legend><b>Cadastramento Refugiados</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required value= "<?php echo $linha['nome']; ?>">
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required value= "<?php echo $linha['senha']; ?>">
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required value= "<?php echo $linha['email']; ?>">
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required value= "<?php echo $linha['telefone']; ?>">
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required value= "<?php echo $linha['cidade']; ?>">
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required value= "<?php echo $linha['endereco']; ?>">
                    <label for="cidade" class="labelInput">Endereço</label>
                </div>
                <br><br>
                
                <input class="botao" type="submit" name="submit" id="submit" value= "salvar alteracões">
                <input type="hidden" name= "id" value= "<?php echo $linha['cod']?>">
      </div>
      </div>
  </div>
</section>
</main>
    </body>
    </html>