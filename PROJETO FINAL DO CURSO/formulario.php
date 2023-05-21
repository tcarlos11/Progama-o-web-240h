<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

include_once('conex.php');

$sql = "INSERT INTO promocao (nome, email, cpf, telefone, endereco) VALUE ('$nome', '$email', '$cpf', '$telefone', '$endereco')"; 

if(mysqli_query($conn,$sql))
    header('Location:./index.html?msg=S');
else
    header('Location:./formulario.html?msg=N');
mysqli_close($conn);
?>