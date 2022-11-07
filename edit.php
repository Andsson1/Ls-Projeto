<?php

include("conexao.php");
$id = $_POST['id'];
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$cidade=$_POST['cidade'];
$endereco=$_POST['endereco'];

$sql = "UPDATE cadastro set nome = '$nome', senha = '$senha', email = '$email', telefone = '$telefone', cidade=       '$cidade', endereco = '$endereco' WHERE cod = $id";

if(mysqli_query($conexao, $sql)){
    header('location: cadastrados.php');
}
 

?>