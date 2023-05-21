<?php
echo"
<head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'
integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
</head>";

$id = $_POST['id'];
$comando = $_POST['comando'];
include_once('conex.php');
if($conn->connect_error) {
    die("falha de conexão" . $conn->connect_error);
}

if($comando == "Deletar"){
$sql = "DELETE FROM promocao WHERE id = $id";
if (mysqli_query($conn,$sql))
    echo "Deletado com sucesso.";
else
    echo "Cadastro não deletado";
}
/*
if($comando == "Editar"){
$sql = "SELECT * FROM montadora WHERE id = $id";
$result = mysqli_query($conn, $sql);
$contato = mysqli_fetch_array($result);

echo "<div class='container card col-4 mt-3 p-3 bg-light'>
    <form action='acao.php' method='POST'>
    <input type='hidden' name='id' value='$id'>
        <div class='form-group mt-2'>
            <label>Nome</label>
            <input type='text' class='form-control' name='nome' value= '".$contato["nome"]."'class='form-control'>
        </div>
        <div class='form-group mt-2'>
            <label>Email</label>
            <input type='text' class='form-control' name='email' value= '".$contato["email"]."'class='form-control'>
        </div>
        <div class='form-group mt-2'>
            <label>Telefone</label>
            <input type='number' class='form-control' name='telefone' value= '".$contato["telefone"]."'class='form-control'>
        </div>
        <div class='form-group mt-2'>
            <label>Mensagem</label>
            <input type='text' class='form-control' name='mensagem' value= '".$contato["mensagem"]."'class='form-control'>
        </div>
        <button type='submit' class='btn btn-primary my-2'>Atualizar</button>
    </form>
    </div>";
}
*/
mysqli_close($conn);
?>