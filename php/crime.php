<?php

/* <<<<<<<<<<<<<<<<<<<<<<FORMA 1 MAIS LONGA>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

if (isset($_POST['q1'])) {
    $q1=1;  
} else {
    $q1=0;
}

if (isset($_POST['q2'])) {
    $q2=1;
} else {
    $q2=0;
}

if (isset($_POST['q3'])) {
    $q3=1;
} else { 
    $q3=0;
}

if (isset($_POST['q4'])) {
    $q4=1;
} else {
    $q4=0;
}

if (isset($_POST['q5'])) {
    $q5=1;
} else {
    $q5=0;
}

$resultado = $q1 + $q2 + $q3 + $q4 + $q5;

if($resultado == 2){
    echo "SUSPEITO";
}
elseif($resultado == 3 or $resultado == 4){
    echo"Cúmplice";
}
elseif($resultado == 5){
    echo "Assacino";
}
else{
    echo"inocente";
}
<<<<<<<<<<<<<<<<<<<<<<FORMA 2>>>>>>>>>>>>>>>>>>>>>
$resultado=0;
if (isset($_POST['q1'])) {
    $resultado+=1;  }
if (isset($_POST['q2'])) {
    $resultado+=1;
}  
if(isset($_POST['q3'])) {
    $resultado+=1;
}
if (isset($_POST['q4'])) {
    $resultado +=1;
} 
if (isset($_POST['q5'])) {
    $resultado+=1;
}
if($resultado == 2){
    echo "SUSPEITO";
}
elseif($resultado == 3 or $resultado == 4){
    echo"CÚMPLICE";
}
elseif($resultado == 5){
    echo "ASSACINO";
}
else{
    echo"INOCENTE";
}
<<<<<<<<<<FORMA MAIS SIMPLIFICADA>>>>>>>>>>>>>>>>>>>>
*/
$resultado=0;
if (isset($_POST['q1'])) $resultado+=1;
if (isset($_POST['q2'])) $resultado+=1;
if(isset($_POST['q3'])) $resultado+=1;
if (isset($_POST['q4']))$resultado +=1;
if (isset($_POST['q5']))$resultado+=1;
if($resultado == 2)echo "SUSPEITO";
elseif($resultado == 3 or $resultado == 4) echo"CÚMPLICE";
elseif($resultado == 5)echo "ASSACINO";
else echo"INOCENTE";


?>

