<?php
  
    class gildasio

    {
      
        public static function printNome(){
            echo 'Gildasio';
        }
    }

       /*No método Estático em vez de ficar criadno instâncias de  classes para chamar os métodos 
       Estáticos basta apontar dois pontos (::) fazendo assim uma referẽncia direta para a classe*/

       gildasio::printNome();

?>
