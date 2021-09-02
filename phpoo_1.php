<?php
    /**
     * CRIANDO CLASSES 
     */
    /**
     * Uma classe é criada a partir de MÉTODOS E ATRIBUBOS
     * 
     */
    class TIgildasio
    {
        //ATRIBUTOS
        public $pessoa = 'João';

        //Método construtor 
        /* function __construct($nome){
            echo $nome;
        }

        public function printNome(){
            return 'Gildasio';
        }
        */
    }
    

    //INSTANCIANDO CLASSES (CHAMADA A CLASSE)
    /* new gil('Gildasio');*/

    //INSTANCIANDO A PARTIR DE UMA VARIÁVEL
    $TIgildasio = new TIgildasio();

    /*echo $gildasioBizerra->printNome();*/

    echo $TIgildasio->pessoa;
    
?>
