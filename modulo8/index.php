<?php
#########Laço for##########
    for($i=0; $i<10; $i++){
        echo "Execução laco for numero: ".$i."<br />";
    } 
#####==================#####
    
#########Laço foreach##########
    $array = array('a','b','c','d','e');
    foreach($array as $key => $value){
        echo "Execução laco foreach numero: ".$key.". Valor obtido eh: ".$value."<br />";
    } 
#####==================#####
    
#########Laço while##########
    $i = 1;
    while($i<=10){
        echo "Execução laco while numero: ".$i."<br />";
        $i++;
    }
#####==================#####
    
#########Laço do while##########
    $i = 1;
    do{
        echo "Execução laco do while numero: ".$i."<br />";
        $i++;
    }while($i<=10);
#####==================#####
    
#########Laços aninhados##########
    for($i=0; $i<10; $i++){
        echo "Execução laco for numero 1: ".$i."<br />";
        for($j=1; $j<=10; $j++){
            echo "Execução laco for numero 2: ".$j."<br />";
        }
    } 
#####========================#####
?>

