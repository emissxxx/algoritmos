<?php
#comentario
$estado = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio</title>
</head>
<body>
    <?php switch($estado){
        case 0:
            echo 'desligado';
            break;
        case 1:
            echo 'Ligado';
            break;
        case 2:
            echo 'Em espera';
            break;

    }
    ?>
    <h1><?php echo "A lampada esta $estado"; ?></h1>
</body>
</html>