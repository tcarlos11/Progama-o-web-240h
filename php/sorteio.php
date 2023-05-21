<?php

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
