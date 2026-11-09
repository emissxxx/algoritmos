<?php
    header('Content-Type: application/json');
    $method = $_SERVER['REQUEST_METHOD'];
    $url= explode("/", $_SERVER['REQUEST_URI']);
    $recurso = $url[3];

    switch ($recurso){
        case "alunos":
            $conteudo = json_decode(file_get_contents("alunos.json"));
            echo json_encode($conteudo);
            break;
        case 'professores':
            $conteudo = json_decode(file_get_contents("professores.json"));
            echo json_encode($conteudo);
            break;
            default:
            echo "nao";
    }

?>