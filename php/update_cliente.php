<?php
$id = $_POST['id'];
$nome = $_POST['neme']; 
$usuario = $_POST['usuario'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nascimento = $_POST['nascimento'];
$sexo = $_POST['sexo'];
$escol = $_POST['escol'];
include_once("conec.php");
$sql = "UPDATE testform SET nome='$nome', usuario='$usuario', telefone='$telefone', nascimento='$nascimento', sexo='$sexo', escol='$escol', email='$email', senha='$senha' WHERE id = '$id'";
 if(mysqli_query($conn, $sql))
    header('location:./select_html.php?msg=S');
    else 
    header('location:./select_html.php?msg=N');
    mysqli_close($conn);

mysqli_query($conn, $sql); 

?>