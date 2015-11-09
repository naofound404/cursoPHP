<?php
#####Função sem retorno#####
    function somar(){
        echo 'somar: '.(2+2);
    }
    somar();
#####==================#####

#####Função com retorno#####
    function subtrair(){
        return 2-2;
    }
    echo ' subtrair: '.subtrair();
#####==================#####

#####Função com parametros#####
    function multiplicar($vetor){
        return ' multiplicar: '.$vetor[0]*$vetor[1];
    }
    echo multiplicar(array(3,6)); //os parametros podme ser variáveis
#####======================#####

#####Função recursiva (decidi dar de presente para vocês)#####
    function fatorial($numero) {
        if ($numero > 0) {
            return $numero * fatorial($numero - 1);
        } else {
            return 1;
        }
}
$numero = 10; //(10x9x8x7x6x5x4x3x2x1);
echo ' fatorial de '.$numero.' é '.fatorial($numero);
#####=====================================================#####
?>