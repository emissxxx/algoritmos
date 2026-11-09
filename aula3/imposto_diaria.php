<?php
$hospedes = $_GET['hospedes'];
$valorHospede = $_GET['valor_hospede'];
$dias = $_GET['dias'];

$totalHospedagem = $hospedes * $valorHospede * $dias;
$totalComImposto = $totalHospedagem * 1.03;

echo "Valor total da hospedagem: R$ " . $totalHospedagem . "<br>";
echo "Valor com imposto (3%): R$ " . $totalComImposto;
