<?php
$valor = $_GET['valor'];
$montante = $_GET['montante'];
$troco = $montante - $valor;

if($troco<0){
    echo 'Pague o valor completo!!';
} else{
    echo "O troco é R$ $troco";
}
