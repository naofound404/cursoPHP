<?php
#####Estanciar nova variável######
        $nome; //correto mas não recomendado (NULL);
        $nome = ""; // correto e recomendado (String);
#####========================#####

#####Estanciar nova variável PascalCase######
        $NomeSobreNome = "";
#####===================================#####

#####Estanciar nova variável camelCase######
        $nomeSobreNome = "";
#####==================================#####

#####Estanciar nova variável notação hungara######
        $sNome = "";
#####========================================#####

######Variavel de variáveis#######
        $nome = "Pedro";
        $$nome = "Silva";
        
        echo "$nome ${$nome}";
        echo "$nome $Pedro";
#####========================#####
        
######Referência de variáveis#######
        $nome      = "Pedro";
        $sobreNome = "Silva";
        
        $sobreNome = &$nome;
        $sobreNome = "$sobreNome Bandeira";
        
        echo $nome;
        echo $sobreNome;
#####===========================#####

?> 

