<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mural de Recados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Mural de Recados</h2>

    <form method="POST" action="">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br>

        <label>Mensagem:</label><br>
        <input type="text" name="mensagem" required><br>

        <input type="submit" value="Enviar Recado">
    </form>

    <hr>

    <h3>Recados Postados:</h3>

    <?php
    $arquivo = "recados.json";

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $mensagem = $_POST['mensagem'];
        $data = date('d/m/Y H:i');

        $novoRecado = array(
            "nome" => $nome,
            "mensagem" => $mensagem,
            "data" => $data
        );

        if (file_exists($arquivo)) {
            $conteudo = file_get_contents($arquivo);
            $recados = json_decode($conteudo, true);
        } else {
            $recados = array();
        }

        $recados[] = $novoRecado;

        $json = json_encode($recados);
        file_put_contents($arquivo, $json);
    }

    if (file_exists($arquivo)) {
        $conteudo = file_get_contents($arquivo);
        $recados = json_decode($conteudo, true);

        if (!empty($recados)) {
            foreach ($recados as $r) {
                echo "<div class='recado'>";
                echo "<strong>" . $r['nome'] . "</strong> (" . $r['data'] . ")<br>";
                echo $r['mensagem'];
                echo "</div>";
            }
        } else {
            echo "Nenhum recado ainda.";
        }
    }
    ?>

</body>
</html>