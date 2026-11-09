<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario === "admin" && $senha === "123") {
        echo "<p>Login realizado com sucesso</p>";
    } else {
        echo "<p>Usuário ou senha inválidos</p>";
    }
?>