<?php

$num = $_GET['num'];

for ($i = 1; $i <= $num; $i++) {
    echo str_repeat("%", $i) . "<br>";
}