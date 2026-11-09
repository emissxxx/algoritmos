<?php
/*
    tarefa 1
  Diferença entre include() e require():
  - include(): Se o arquivo não for encontrado ou tiver algum erro fatal, o PHP 
    gera apenas um aviso (warning) e continua a execução do resto da página.
  - require(): Se o arquivo não for encontrado ou falhar, o PHP gera um erro 
    fatal (fatal error) e interrompe imediatamente a execução da página inteira.
*/
include 'head.php';
include 'menu.php';
include 'conteudo.php';
include 'foot.php';
?>