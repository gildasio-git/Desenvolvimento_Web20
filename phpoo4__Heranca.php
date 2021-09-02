<?php

/**Class aplicação */
  class Aplicacao
  {
      public function __construct($nome)
      {
         echo $nome;
      }

      public function runApp()
      {
          echo 'Rodando';
      }
            
  }
  

  /**classe gildasio */
  class Gildasio extends Aplicacao /** "extendes aplicação herda tudo que tem na class aplicação dentro class Gildasio */
  {
      
    public $nome = 'Leticia';
    public static $contagem =0;

    public function __construct(){
        parent:: __construct('GIl'); /**PARENT permite chamar qualquer função dentro da class pai */
    }

    public static function incrementar()
    {
        self::$contagem;
    }
  }
  
  //**Instanciando */
  $Gildasio = new Gildasio();
  $Gildasio->runApp();
 

?>
