<?php
echo"<head>
<meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
</head>";
include_once("conec.php");

$sql = "SELECT * FROM  testform";
$result = mysqli_query($conn, $sql);

if($result){
    echo"
    <body style='background-color: bisque;'>
    <table class='table table-striped'>
    <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>USUARIO</th>
    <th>TELEFONE</th>
    <th>EMAIL</th>
    <th>SENHA</th>
    <th>NASCIMENTO</th>
    <th>SEXO</th>
    <th>ESCOLARIDADE</th>
    </tr>";
    while($linha = mysqli_fetch_array($result)){
        echo"
        <form action='delet.php' method='POST'>
        <tr><td>".$linha["id"]."</td>
        <td>".$linha["nome"]."</td>
        <td>".$linha["usuario"]."</td>
        <td>".$linha["telefone"]."</td>
        <td>".$linha["email"]."</td>
        <td>".$linha["senha"]."</td>
        <td>".$linha["nascimento"]."</td>
        <td>".$linha["sexo"]."</td>
        <td>".$linha["escol"]."</td>
        <td><input class='btn btn-primary'type='submit' name='comando' value='Editar'></td>
        <td><input class='btn btn-danger'type='submit' name='comando' value='Deletar'></td>
        </tr>
        <input type='hidden' name='id' value='".$linha["id"]."'>
        </form>";
    }
    echo"</table>";}else{
        echo"0 Resultado";
    }
    $conn = new MySQLi('localhost', 'root', '', 'testebanco');
    if ($conn->connect_error) {
      die("falha da conexão" . $conn->connect_error); 
    }
    if (mysqli_connect_errno()) {
      die('Falha ao conectar-se ao banco de dados: ' . mysqli_connect_error());
    }
    $sql = "SELECT nome FROM testform";
    $resultado = mysqli_query($conn, $sql);
    $nomes = array();
    while ($row = mysqli_fetch_assoc($resultado)) {
      $nomes[] = $row['nome'];
    }
    mysqli_close($conn);
    ?>
    <div>
      <h2>Sorteio de nomes do banco de dados</h2>
      <button id="sortear">Sortear nome</button>
      <p id="nome-sorteado"></p>
    </div>
    <script>
    const nomes = <?php echo json_encode($nomes); ?>;
    
    const sortearNome = () => {
    
      const nomeSorteado = nomes[Math.floor(Math.random() * nomes.length)];
    
      // exibir o nome sorteado na página
      const elementoNomeSorteado = document.getElementById('nome-sorteado');
      elementoNomeSorteado.innerText = nomeSorteado;
    };
    
    const botaoSortear = document.getElementById('sortear');
    botaoSortear.addEventListener('click', sortearNome);
    </script>
