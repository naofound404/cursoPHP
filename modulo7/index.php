<?php
#########Decisões complexas no códio##########
    $numero1 = 1;
    $numero2 = 2;
    $numero3 = 3;
    
    if(($numero1==4 && $numero2==7) || $numero3==3){
        echo 'entrei no if';
    }else{
        echo 'entrei no else';
    }   
#####===========================#####    

#########Combinações de condições##########
    if($numero1 == 1){
        if($numero2 == 2){
           echo 'ola mundo';
        }
    }
#####=================================#####     
    
#########Condições Aninhadas##########
        if($numero1 == 1){
        if($numero2 == 2){
            echo 'ola mundo';
        }
    }else if($numero3==3){
        if(true){
            if(true){
                if(false){
                    echo 'entrou na primeiraetapa!';
                }else{
                    if(true){
                        echo 'entrou na seunda etapa!';
                    }
                }
            }
        }
    }else{
        echo 'entrou no else';
    }
#####============================#####
    
#########Operador ternário##########
    $resposta = $numero1==1?'entrei no if':'entrei no else';
    echo $resposta;
#####==========================#####

#########Pegadinha com ternário##########
    echo true?'a':true?'b':'c';
#####===============================##### 
?>

