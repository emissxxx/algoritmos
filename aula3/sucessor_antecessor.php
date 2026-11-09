<?php
$numero = $_GET['numero'];

$antecessor = $numero - 1;
$sucessor = $numero + 1;

echo "Número: " . $numero . "<br>";
echo "Antecessor: " . $antecessor . "<br>";
echo "Sucessor: " . $sucessor . "<br>";
