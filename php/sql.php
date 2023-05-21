<?php
$conn = new MySQLi('localhost', 'root', '', 'bd_escola');
if ($conn->connect_error) {
  die("falha da conexão" . $conn->connect_error); 
}
$x = 6;
$sql = "SELECT COUNT(*) AS QTD FROM aluno WHERE nota2 > $x";
$r= mysqli_query($conn, $sql); 
$q = mysqli_fetch_array($r);
echo "quantidade:".$q['QTD'];

?>
