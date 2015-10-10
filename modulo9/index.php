<?php
#########Executar laços por número de vezes desconhecido##########
    $i=0;
    while(true){
        $i++; //se colocar por último dentro do laço provoca loop infinito
        if($i==10){
            break; //interrompe a execução do laço
        }
        if($i==5){
            continue; //pula uma execução do laço
        }else{
            echo $i;
        }
    }
#####=========================================================#####
    
#########Loop infinito (SE DESCOMENTAR VAI ENTRAR EM LOOP)########
//    for($i=0; $i<10; $i--){
//       echo $i."<br />";
//    }
#####=========================================================#####
?>

