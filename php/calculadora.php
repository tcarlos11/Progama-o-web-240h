<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$resultado = $numero1 + $numero2;
$resultado2 = $numero1 - $numero2;
$resultado3 = $numero1 * $numero2;
$resultado4 = $numero1/$numero2;
echo "a soma, subtração, multiplicação e Divisão de $numero1 seguido de $numero2 é: <br>
soma de $numero1 + $numero2 = $resultado <br>
subtração de $numero1 - $numero2  = $resultado2 <br>
multiplicação de $numero1 * $numero2  = $resultado3 <br>
divisão de $numero1/$numero2  = $resultado4";
?>