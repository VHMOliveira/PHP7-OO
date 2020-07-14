<?php

    class Exemplos{
        
        /**
         * sempre que houver a necessidade de um atributo e/ou metodo estático
         * colocar a palavra static
         * 
         * método estático não está acessível pelo operador ->
         * 
         * método estático não pode utilizar o operador $this
         */
        public static $atributo1 = 'eu sou um atributo estático';
        public $atributo2 = 'eu sou um atributo normal';

        public static function metodo1(){
            echo 'eu sou um método estático';
        }

        public function metodo2(){
            echo 'eu sou um método normal';
        }

    }

    //para acessar atributos e métodos normais deve-se instanciar a classe em um objeto
    $X = new Exemplos();

    //para acessar atributos e métodos estáticos deve-se usar o operador :: (resolução de escopo)
    echo Exemplos::$atributo1;
    Exemplos::metodo1();
?>