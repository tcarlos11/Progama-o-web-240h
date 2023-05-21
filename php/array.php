<?php
/*$nome[0] = "Euclides";
$nome[1] = "João";
$nome[2] = "kauan";
$nome[3] = "Eva";
$nome[4] = "maria";
$nome[5] = "jonas";
$idade = array("30", "34", "46", "58", "20", "22");
for($i = 0; $i <= 5; $i++){
    echo "$nome[$i] tem $idade[$i] Anos...<br>";
}
$notas = array(5, 10, 9, 7, 6, 2, 6.5);
$cont = 0;
for($i = 0; $i <= 6; $i++){
    if($notas[$i] >= 7){
        $cont++;
    }
}
echo "<br>$cont alunos foram aprovados";

$num1 = 1;
while($num1 <= 10){
    $num2 = 7 * $num1;
    echo"7 x $num1 = $num2 <br>";
    $num1++; 
}

//inserir numeros


for($i = 0; $i<=9; $i++){
    $numero[$i] = rand(1, 25);
}

//escrever os numeros
for($i = 0; $i <= 9; $i++){
    echo"$numero[$i]<br>";
}
$i = 0;
while($i <= 9){
    $num[$i] = rand(1, 25);
    $i++;
}
$j = 0;
while($j <= 9){
echo"$num[$i] <br>";
$j++;}

//RAND WHILE

$nomes = array("UM", "DOIS", "TREIS", "QUATRO", "CINCO", "SEIS", "SETE", "OITO", "NOVE", "DEZ");

$i = 1;
while($i <= 10){
    $j[$i] = $nomes[rand(0, count($nomes) - 1)];
    echo $j[$i] . "<br>";
    $i++; 
}

$i = 1;
while($i <= 10){
    $j[$i] = rand(1, 25);
    echo"$i Sorteio: $j[$i] <br>";
    $i++;
}
*/

$aluno = array("nome"=>"Euclides", "idade"=>rand(8, 28), "sexo"=>"M");
if($aluno['idade'] <= 18){
    echo $aluno['idade']."anos <br>".$aluno['nome']." é menor de idade";
}
else{
    echo $aluno['idade']."anos<br>".$aluno['nome']. " é maior de idade";
}

//echo $aluno['nome']. " tem ".$aluno['idade']." anos.";


?>