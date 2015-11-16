<?php
#####Tratamento de erros com try catch#####
function somar($numero){
    if(is_numeric($numero)){
        echo $numero+$numero;
    }else{
        throw new Exception('O valor informado nao é numerico!!');
    }
}

try {
    somar('a');
} catch (Exception $exc) {
    echo 'Erro ao executar funcao: '.$exc->getMessage();
}  finally {
    echo '<br>Fim da execucao';
}
#####=================================#####

#####Erros mais comuns do PHP#####

//Parse Error
//Unexpected end
//Undefined Index
//Undefined Variable
//Use of undefined constant
//Cannot modify header information
//Call to undefined function
//Class not found
//Call to undefined method
//Call to a member function on a non-object
//Invalid argument supplied for foreach()

#####=================================#####
?>
