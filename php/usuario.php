<?php
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
include_once("conex.php");
$sql = "SELECT * FROM testform where usuario = '$usuario' and senha = '$senha' ";
$result = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($result);
if($linha){
   // echo 'USUARIO ENCONTRADO';
    $url = 'location:./usuario.html?msg=S';

}
else{
    //echo 'USUARIO NÃO ENCONTRADO';
    $url='location:./usuario.html?msg=N';
}

header($url);
//mysqli_query($conn, $sql);
mysqli_close($conn);


/*if($usuario == "Jao" && $senha == "peroba123"){
echo "olá $usuario, Bem Vindo de Volta";}
else{
    echo "a conta não existe";
}*/
?>