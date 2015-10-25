<?php
#####Escrever em arquivo texto#####
    $string = "Titulo 1"."Titulo 2";
    $arquivo = fopen("teste.html", "a"); // escolha o formato do arquivo e metodo de escrita
    fwrite($arquivo, $string);
    fclose($arquivo);
#####=========================#####
?>
<!--
w  – Abre somente para gravação; coloca o ponteiro no começo do arquivo e apaga o conteúdo que já foi escrito. Se o arquivo não existir, tentar criá-lo.
w+ – Abre para leitura e escrita; coloca o ponteiro no início do arquivo e apaga o conteúdo que já foi escrito. Se o arquivo não existir, tentar criá-lo.
a  – Abre o arquivo somente para escrita; coloca o ponteiro no fim do arquivo. Se o arquivo não existir, tentar criá-lo.
a+ – Abre o arquivo para leitura e gravação; coloca o ponteiro no fim do arquivo. Se o arquivo não existir, tentar criá-lo. 
-->