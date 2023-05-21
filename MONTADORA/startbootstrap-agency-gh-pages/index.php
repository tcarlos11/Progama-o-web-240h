<?php
$nome1 = $_POST['nome1'];
$email1 = $_POST['email1'];
$numero1 = $_POST['numero1'];
$mensagem1 = $_POST['mensagem1'];


$conn = new MySQLi('localhost', 'root', '', 'montadora');

  $sql = "INSERT INTO contato (nome1, email1, numero1, mensagem1) VALUE ('$nome1', '$email1', '$numero1', '$mensagem1')"; 

mysqli_query($conn, $sql); 
mysqli_close($conn);
?>