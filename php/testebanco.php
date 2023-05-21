<?php
$nome = $_POST['neme']; 
$usuario = $_POST['usuario'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nascimento = $_POST['nascimento'];
$sexo = $_POST['sexo'];
$escol = $_POST['escol'];
include_once("conec.php");

$sql = "INSERT INTO testform (nome, usuario, telefone, nascimento, sexo, escol, email, senha ) VALUE ('$nome', '$usuario', '$telefone', '$nascimento', '$sexo', '$escol', '$email', '$senha')"; 

mysqli_query($conn, $sql); 
mysqli_close($conn);


?>
