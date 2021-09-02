<?php
  
    class gildasio

    {
        /**Atributo PRIVATE também não pode ser acessado fora da classe */
        private $nome = 'Leticia';

        /** Método PRIVATE é chamado somente dentro da classe */
        private function printNome()
        {
            echo 'Gildasio';
        }

        public function printNomePublic()
        {
            /**THIS referencia a classe */
             return $this->nome;
        }
    }

        //Instanciando a classe
        $gildasio = new gildasio();

        echo $gildasio->printNomePublic();

?>
