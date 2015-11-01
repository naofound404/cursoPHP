<?php
#####Ler arquivo texto#####
    $filename = "emails.csv";
    $handle = fopen ($filename, "r");
    $conteudo = fread ($handle, filesize ($filename));
    fclose($handle);
    echo $conteudo."<br />";
#####=================#####

#####Ler arquivo texto e salvar em um vetor(lista)suas linhas#####
    $filename = "emails.csv";
    $handle = fopen ($filename, "r");
    $i=0;
    while (!feof($handle)) {
        $current_line[$i] = fgets($handle);
        $i++;
    }
    $cabecalhoTabela = explode(',', $current_line[0]);
    fclose ($handle);
    var_dump($current_line);
    echo "<br />";
    var_dump($cabecalhoTabela);
    echo "<br />";
    echo $cabecalhoTabela[0];
    echo "<br />";
#####========================================================#####

#####Ler arquivo texto e salvar em um vetor(lista)suas linhas opção 2#####
    $file = new SplFileObject("emails.csv");
    while (!$file->eof()) {
        echo $file->fgets(); //aqui pode ser realizadaa mesma operação do laço acima
    }    
#####========================================================#####
?>

