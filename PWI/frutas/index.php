<?php

header("Content-Type: application/json");


$frutas = ['Morango', 'banana', 'limao', 'laranja'];
echo json_encode($frutas);
?>