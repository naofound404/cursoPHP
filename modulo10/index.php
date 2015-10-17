<?php
#####Array-vetor-listagem comum#####
    $listagem = array("banana","laranja","morango");
#####==========================#####
    
#####Array-vetor-listagem associativo#####
    $listagem = array("fruta1"=>"banana","fruta2"=>"laranja","fruta3"=>"morango");
#####================================#####
    
#####Adicionando e Removendo valores do final de um array#####
    $listagem = array("banana","laranja","morango");
    $fruta    = array_pop($listagem); //remove um elemento do fim
    array_push($listagem,"melancia","maça"); //adiciona elementos no fim;
#####====================================================#####
    
#####Adicionando e Removendo valores do inicio de um array#####
    $listagem = array("banana","laranja","morango");
    $fruta    = array_shift($listagem); //remove um elemento do inicio
    array_unshift($listagem,"jaboticaba","amora"); //adiciona elementos no inicio
#####====================================================#####
    
#####Verificar se existe valores no array#####
    $listagem = array("banana","laranja","morango");
    if(in_array("banana", $listagem)){
        echo 'existe';
    }
    
    for($i=0; $i<sizeof($listagem); $i++){
        if($listagem[$i]=="morango"){
            echo 'existe';
        }
    }
#####====================================#####
    
#####Mostrar valores na tela#####
    echo $listagem[0];
    var_dump($listagem);
    print_r($listagem); //esse eu não mostrei no video
#####==========================#####
    
?>

