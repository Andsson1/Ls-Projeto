<?php

include("conexao.php");

$nome=$_POST['nome'];
$senha=$_POST['senha'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$cidade=$_POST['cidade'];
$endereco=$_POST['endereco'];

$sql="INSERT INTO cadastro(nome, senha, email, telefone, cidade, endereco)
            VALUES ('$nome', '$senha', '$email', '$telefone', '$cidade', '$endereco')";
                
    if(mysqli_query($conexao, $sql)){
        echo "Cadastrado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    header('location: formulario.php');
    mysqli_close($conexao);
?>