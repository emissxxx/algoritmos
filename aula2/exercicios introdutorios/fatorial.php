<?php
$num = $_GET['num'];
$res = 1;
for($i = 2; $i<=$num; $i++){
    $res*=$i;
}
echo $res;