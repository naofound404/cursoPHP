<?php
#########Operadores Lógicos##########
    if(1==1){ //1 é igual a 2
        echo 'Operador de igualdade';
        echo '<br />';
    }
    if(1!=2){ // 1 é diferente de 2
        echo 'Operador de negação';
        echo '<br />';
    }
    if(1==1 && 2==2){
        echo 'Ambas as condições devem ser verdadeiras';
        echo '<br />';
    }
    if(1==1 || 2==1){
        echo 'Uma ou as duas condições verdadeiras';
        echo '<br />';
    }
    if(1==1 xor 2==1){
        echo 'Apenas uma das duas condições verdadeiras e somente uma';
        echo '<br />';
    }
#####===========================#####

#######Estruturas de Controle########
    $teste  = 'pedro';
    $teste2 = 'banana'; 
    if($teste == 'pedrooo'){ // se for verdadeiro
        echo 'entrou no if';
    }else if ($teste2 == 'banana'){ // senão se for verdadeiro
        echo 'entrou no else if';
    }else{ // senão executa algo
        echo 'entrou no else';
    }
#####===========================#####
?>

