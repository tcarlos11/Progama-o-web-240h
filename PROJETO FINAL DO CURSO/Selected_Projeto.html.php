<?php
echo"
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>Tabela</title>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'
integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
<style>
td{
     word-wrap:break-word;
  }
</style>
</head>";

include_once('conex.php');


$sql = "SELECT * FROM contato";
$result = mysqli_query($conn, $sql);

if($result) {
    echo "
<!-- <table class='table table-striped'> -->
<table class='table table-secondary table-bordered border-dark' id='example' class='display dataTable dtr-inline' cellspacing='0' width='100%' role='grid' aria-describedby='example_info' style='width: 100%;table-layout:fixed'>
<thead class='table-dark'>
    <tr>
    <th class='col-1'>ID</th>
    <th class='col-5'>NOME</th>
    <th class='col-4'>EMAIL</th>
    <th class='col-2'>TELEFONE</th>
    <th class='col-9'>MENSAGEM</th>
<!-- <th>EDITAR</th> -->
    <th class='col-1'>DELETE</th>
    </tr>
</thead>";

    while($linha = mysqli_fetch_array($result)) {
        echo "<form action='acoes.php' method='POST'>
        <tr><td class='col-1'>".$linha["id"]."</td>
        <td class='col-5'>".$linha["nome"]."</td>
        <td class='col-4'>".$linha["email"]."</td>
        <td class='col-2'>".$linha["telefone"]."</td>
        <td class='col-9'>".$linha["mensagem"]."</td>
    <!-- <td><input class='btn btn-primary' type='submit' name='comando' value='Editar'></td> -->
        <td class='col-1'><input class='btn btn-danger' type='submit' name='comando' value='Deletar'></td>
        </tr>

        <input type='hidden' name='id' value='".$linha["id"]."'>
        </form>";
    }
    echo "</table>";
    } else {
        echo "0 resultado";
    }
?>