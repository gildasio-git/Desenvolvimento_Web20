<?php
   /**INTERFACE: É como se fosse um desenho da class antes mesmo dela ser declarada 
    * reportando o que ira ter quando a classe for implementada.
   */
    
   
   interface gildasioInter
   {
       public function getNome();
       public function setNome($nome);

   }

   class gildasio implements gildasioInter
   {

    private $nome = 'Gildasio';

    public function getNome()
    {
         return $this->nome;
    }

    public function setNome($nome)
    {
          $this->nome = $nome;
    }
        
       
    }

    $gil = new gildasio();
    echo $gil->getNome();

?>
