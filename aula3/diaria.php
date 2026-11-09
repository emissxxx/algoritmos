<?php
$hospedes = $_GET['hospedes'];
$valorHospede = $_GET['valor_hospede'];

$totalDiaria = $hospedes * $valorHospede;

echo "Valor total da diária: R$ " . $totalDiaria;
