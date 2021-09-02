<?php
            /**
             * ARRAY: Maneira de armazanar várias infornmações e muma só variável
             */

             $familia = array('Gildasio','Leticia','Giulene','Neide');

             /** Para ler o conteudo do array usa o echo passando o índice */
             echo $nome[1];
             
             /* Outra forma e passando o índice que deseja no array*/
             $nome = array('nome1'=>'Gildasio','Leticia','Giulene','Neide');
             echo $nome['nome1'];

             /**Lendo todos os elementos do array usando a função print_r */
             print_r($nome);

             /*Lendo conteúdo de um array usando funcão FOREACH | laço de repetição
              a variável KEY reporta as chaves dentro array. podendo ser recuperado as 
              chaves em vez de valore apenas passando no echo a varíavel $KEY

              No FOREACH somos obrigados a passar um ARRAY
             */
                foreach ($nome as $key => $value) {
                    echo $value;
                    echo '<br/>';
                }

             /**
              * LAÇOS DE REPETIÇÃO Exemplo prático
              */

                for ($i=0; $i < 10; $i++) { 
                    echo $i;
                    echo '<br>';
                }

               
             /**
              * LAÇOS DE REPETIÇÃO "FOR" PERCORRENDO UM ARRAY
              */
                for ($i=0; $i < sizeof($familia); $i++) { 
                    echo $nome[$i];
                    echo '<br>';

                }

               /**
              * LAÇOS DE REPETIÇÃO "WHILE" PERCORRENDO UM ARRAY
                DIFERENTE DO FOR O WHILE NÃO INCLEMENTA, POIS O INCLEMENTEO PRECISA SER FEITO MANUALMENTE
              */

                $i = 0;
                while ($i<= 10) {
                    echo "mensagem";
                    echo '<br/>';
                    $i++;
                }

?>