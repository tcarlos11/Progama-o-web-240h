<?php
/*
//-100 A 100 em while
$num = -100;
$num2 =100;
while($num <= $num2){
    echo"$num <br>";
   // $num++; 
   //$num = $num +1;
   $num += 1;
}


i = 1

while i <= 10:
    echo(num, "x", i, "=", num*i)
    i += 1


//-100 A 100 em for
for( $num = 1;$num <=$num2 ;$num++ ){
    echo "$num <br>";
}
//tabuada em while professor
$num1 = 1;
while($num1 <= 10){
    $num2 = 7 * $num1;
    echo"7 x $num1 = $num2 <br>";
    $num1++; 
}


//TABUADA em while
$num1 = 7;
$num2 = 1;
while( $num2 <= 10){
    $num3 = $num1 * $num2;
    echo"$num1 x $num2 = $num3<br>";
    $num2++;
}
//uma rainha requisitou o serviço de um monge, o qual exigiu o pagamento em gão de trigo da
seguinte maneira: os grãos de trigo seriam dispostos em um tabuleiro de xadrez,
 de tal forma que a primeira csa do tabuleiro tivesse um grão, e as casa seguintes o dobro da anterior a rainha devera pagar o monnge.

//CRIE UM PROGAMA QUE CALCULE O FATORIAL DE UM NUMERO
//5! = 5 * 4 =20* 3 =60 * 2=120 * 1;

$fat = 5;
$res = $fat * ($fat -1);
echo"$fat x". ($fat-1)." = $res <br>";
$fat = $fat -2;
while($fat >= 1){
    echo"$res x $fat =";
    $res = $res * $fat ;
    echo"$res <br>";
    $fat--;
}



//exemplo 2
fat= 4;
$res = 5;
while($fat >= 1){
    echo"res x $fat = ".($res * $fat). "<br>";
    $res = $res * $fat;
    $fat--;
}
*/

$fat = 5;
$fat1 = $fat - 1;//4
$res = $fat * $fat1;//20
echo"$fat x $fat1 = $res<br>";
$fat2 = $fat1 -1;//3
while($fat2 >= 1){
    $res1 = $res* $fat2;
    echo"$res x $fat2 = $res1<br> ";
    $fat3 = $fat2 - 1;
    $res2 = $fat3 * $res1;
    echo" $res1 x $fat3 = $res2<br>"
    $fat4 = $fat3 -1;
    $res3 = $res2 * $fat4;
    echo"$res2 x $fat4 = "
    $res3 = $fat4 * $res2;
    $fat2--;

}



?>