<?php
echo"
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>Tabela</title>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'
integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>

</head>";

include_once('conex.php');

/*
$sql = "SELECT nome FROM promocao";
$result = mysqli_query($conn, $sql);
$qtd = mysqli_num_rows($result);

if ($qtd > 0) {
    $sorteado = rand(0, $qtd-1); // índice aleatório
    mysqli_data_seek($result, $sorteado); // mover o cursor para o resultado selecionado
    $linha = mysqli_fetch_assoc($result); // obter a linha selecionada
    echo $linha["nome"] . "<br>";
} else {
    echo "Nenhum resultado encontrado.";
}
*/
$sql = "SELECT nome FROM promocao";
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