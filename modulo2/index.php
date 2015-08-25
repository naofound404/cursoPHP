<?php
#####Exibir mensagem com echo#####
    echo ("Hello World!!");
#####========================#####

#####Quebra de linha com echo#####
    echo ("Hello <br />\n World!!");
#####========================#####

#####Exibir mensagem com printf#####
    printf('Hello %s','Mundo!!');
#####==========================#####
    
#####Ordenar argumentos com printf#####
    printf('%2$u %1$s anos','Eu tenho', '3');
#####=============================#####
    
#####Formatar data com printf#####
    printf('%02d-%02d-%04d', '19', '05', '1990');
#####========================#####

#####Guardar formatação para uso posterior#####
    sprintf('%02d-%02d-%04d', '19', '05', '1990');
#####=====================================#####

?>