<?php
$corTexto = $_GET['cor_texto'];
$corFundo = $_GET['cor_fundo'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mensagem Inspiradora</title>
    <style>
        body {
            background-color: <?php echo $corTexto ? $corFundo : '#ffffff'; ?>;
            color: <?php echo $corTexto; ?>;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        .caixa-mensagem {
            padding: 30px;
             <?php echo $corTexto; ?>;
            border-radius: 12px;
            max-width: 500px;
        }
    </style>
</head>
<body>

    <div class="caixa-mensagem">
        <h1>Mensagem</h1>
        <p>"O problema é que as pessoa julgam você antes mesmo de te conhecer - Bob Esponja"</p>
    </div>

</body>
</html>