<?php

//  FUNÇÕES:

        /**  
             STR_REPLACE("localizar","substibuir","aonde procurar")
            
            Exemplo:
        */
       
        $frase = 'Gildasio é desenvolvedor WEEB';
        $novaFrase = str_replace('Gildasio','Leticia',$frase);    
        //echo $novaFrase;

        /**
            SUBSTR("VARIAVEL","INICIO","FIM")
         
            Exemplo:
        */

         $novaFrase = substr($frase,1,5);

            //echo $novaFrase;
        
        /**
            EXPLODE: Transforma uma string em um ARRAY.
            
            EXPLODE("DELIMITADOR","FRASE")
            Exemplo:
        */

            $novaFrase = explode(' ',$frase);
            
            //print_r($novaFrase);


         /**
            IMPLODE: Faz o reverso, juntando o array
            
            EXPLODE("DELIMITADOR","FRASE")
            Exemplo:
        */
            $novaFrase = implode(' ',$novaFrase);
            echo $novaFrase;

 ?>
 