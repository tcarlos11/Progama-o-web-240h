<?php
$coelhos=$_POST['coelhos'];
$patas=$_POST['patas'];
$patascoelho=$coelhos * 4;
$galinhaspatas=$patas - $patascoelho;
$galinha=$galinhaspatas / 2;
$animais=$galinha + $coelhos;
if ($coelhos > $patas*2) {
    echo "Não é possível calcular:o número de coelhos é maior ou igual o número de patas.";
} else {
    echo "Com $patas patas e $coelhos coelhos temos: $galinha galinhas com um total de $animais animais.";
}
?> 