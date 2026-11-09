<?php
header("Content-Type: application/json");

$carros = ['Fusca', 'Gol', 'Civic', 'Corolla'];

echo json_encode($carros);
?>