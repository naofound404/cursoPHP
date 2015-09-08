<?php
#####Receber dados através de POST######
    $campo1 = $_POST['campo1']; 
    $campo2 = $_POST['campo2']; 
#####==============================#####

###############Conversões###############
    $campo1 = $_POST['campo1']; 
    $campo2 = $_POST['campo2']; 
    
    $resultado = $campo1+$campo2;
    $resultado = (int)$resultado; //integer
    $resultado = (double)$resultado; //double
    $resultado = (float)$resultado; //float
    $resultado = (bool)$resultado; //boolean

    echo "Resultado tem o valor de: ".$resultado." e eh do tipo: ".gettype($resultado);
#####==============================#####  

################is_nan##################
    $campo1 = acos($_POST['campo1']);
    var_dump($campo1, is_nan($campo1)); 
#####==============================#####
?>

