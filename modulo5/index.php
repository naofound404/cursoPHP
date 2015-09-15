<?php
#####Exibir data atual com date######
    echo date('d/m/Y');
#####===========================#####
echo "<br />";
echo "<br />";
#####Converter data com date e strtotime######
    $data = '2015-05-19';
    echo date('d/m/Y', strtotime($data));
#####====================================#####
echo "<br />";
echo "<br />";   
#####Exibir data atual com DateTime######
    $data = new DateTime();
    $dataBR = $data->format('d/m/Y'); //format serve para formatar as datas :D
    echo $dataBR;
#####===============================#####
echo "<br />";
echo "<br />";   
#####Adicionar periodos de tempo à data######
    $data = new DateTime('2015-09-15 13:10:05');
    $data->add(new DateInterval('P5Y1M10DT2H5M25S'));
    $dataPeriodo = $data->format('d/m/Y H:i:s');
    echo $dataPeriodo;
#####===================================#####
echo "<br />";
echo "<br />";   
#####Remover periodos de tempo à data######
    $data = new DateTime('2015-09-15 13:10:05');
    $data->sub(new DateInterval('P5Y1M10DT2H5M4S'));
    $dataPeriodo = $data->format('d/m/Y H:i:s');
    echo $dataPeriodo;
#####===================================#####
echo "<br />";
echo "<br />";    
#####Diferenças entre datas###### 
    $data = new DateTime();
    $dataDif = $data->diff(new DateTime('1990-03-25'));
    echo "Diferenca de: ".
           $dataDif->days." dias".
           $dataDif->m." meses".
           $dataDif->y." anos".
           $dataDif->h." horas".
           $dataDif->i." minutos".
           $dataDif->s." segundos";
#####=======================#####
echo "<br />";
echo "<br />";   
#####Modificar data e hora######
    $data = new DateTime('2015-09-15 13:10:05');
    $data->setDate(2002, 10, 31);
    $data->setTime(08, 30, 40);
    echo $data->format('d/m/Y H:i:s');
#####======================#####
echo "<br />";
echo "<br />";    
#####Converter data formato Internacional######
    $dataBR = "30/04/2017";
    $data = new DateTime();
    $data->createFromFormat('d/m/Y', $dataBR);
   
    $dataUS = $data->format('Y-m-d');
   
    echo $dataUS;
#####===================================#####
  
?>