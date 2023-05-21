<?php
$conn = new MySQLi('localhost', 'root', '', 'testebanco');
if ($conn->connect_error) {
  die("falha da conexão" . $conn->connect_error); 
}
?>