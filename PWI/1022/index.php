<?php
$arquivo = __DIR__ . "/dados.json";

function carregarDados(){
    global $arquivo;
    return file_exists($arquivo) ? json_decode(file_get_contents($arquivo), true) ?? [] : [];
}

function salvarDados($dados){
    global $arquivo;
    file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT));
}

function adicionarFrutas($fruta){
    $frutas = carregarDados();
    $frutas[] = $fruta;
    salvarDados($frutas);
}

function apagarFruta($id){
    $frutas = carregarDados();
    if(isset($frutas[$id])){
        unset($frutas[$id]);
        salvarDados(array_values($frutas));
    }
}

if(isset($_GET['fruta'])) adicionarFrutas($_GET['fruta']);
if(isset($_GET['apagar'])) apagarFruta((int)$_GET['apagar']);
?>