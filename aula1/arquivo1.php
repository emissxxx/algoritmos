<?php
    $nome = 'junior';
?>
<h1>php</h1>
<p><?php echo 'Hello World!'; ?></p>
<p><?php echo "Seja bem vindo $nome";?></p>
<?php
    echo '<p>';
    echo 10 + 10;
    echo '</p>';

    $nota = 7;
     
    if ($nota >=7){
        echo 'Aprovado';
    } else{
        echo 'Reprovado';
    }