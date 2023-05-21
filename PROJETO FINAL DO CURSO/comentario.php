<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

include_once('conex.php');

$sql = "INSERT INTO contato (nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')"; 
mysqli_query($conn, $sql); 

$sql = "SELECT * FROM contato where nome = '$nome' and email = '$email' and  telefone = '$telefone' and mensagem = '$mensagem' ";
$result = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($result);

if($sql){
    $url = 'location:./index.html?msg=S';
} else {
    $url = 'location:./index.html?msg=N';
}

mysqli_close($conn);

header($url);

?> 