<?php
$conn = new MySQLi('localhost', 'id_root', 'senha', 'id_montadora');
if ($conn->connect_error) {
  die("falha da conexão" . $conn->connect_error); 
}
?>
