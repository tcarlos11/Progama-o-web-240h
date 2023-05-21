<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$soma = $n1 + $n2 +$n3;
$dv = $soma / 3;
if($dv < 6)echo "Sua Media é: $dv <br>
    Situação: Reprovado";
else echo "Sua Media é: $dv <br>
    Situação: Aprovado";


if($n1 >= $n2 && $n1 >= $n3)echo "<br>sua maior nota foi: $n1";

elseif($n2 >= $n1 && $n2 >=$n3)echo "<br>sua maior nota foi: $n2";

elseif($n3 >= $n2 && $n3 >= $n1)echo "<br>Sua maior nota foi: $n3";
else{}

if (($n1 > $n2 && $n2 > $n3) || ($n3 > $n2 && $n2 > $n1)) {
    echo "<br>O número do meio é: $n2";
}
elseif (($n2 > $n1 && $n1 > $n3) || ($n3 > $n1 && $n1 > $n2)) {
    echo "<br>O número do meio é: $n1";
}
else {
    echo "<br>O número do meio é: $n3";
}

if($n1 < $n2 && $n1 < $n3){
    echo"<br> sua menor nota foi: $n1";
}
elseif($n2 < $n1 && $n2 < $n3){
    echo"<br> sua menor nota foi: $n2";
}
else{
    echo "<br>sua menor nota foi:$n3";
}

/*
if($n1 > $n2 || $n2 > $n3 ){
    echo" o nuero do meio é :$n2";
}
elseif($n3 < $n2 || $n2 < $n1)
{
    echo" o nuero do meio é :$n2";
}

elseif($n2 > $n1 || $n1 > $n3){
    echo "o numero do meio é:$n1";
}
elseif( $n2 < $n1 || $n1 < $n3){
    echo "o numero do meio é:$n1";
}

elseif($n1 < $n3 || $n3 < $n2){
    echo "o numero do meio é: $n3";
}
elseif( $n1 > $n3 || $n3 > $n2){
    echo "o numero do meio é: $n3";
}
else{}*/

?> 
