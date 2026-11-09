<?php
$preco = $_GET['preco'];

$desconto = $preco * 0.07;
$precoFinal = $preco - $desconto;

echo "Preço original: R$ " . $preco . "<br>";
echo "Valor do desconto: R$ " . $desconto . "<br>";
echo "Preço com desconto: R$ " . $precoFinal;
