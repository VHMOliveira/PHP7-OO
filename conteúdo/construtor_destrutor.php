<?php

    class Pessoa{

        private $nome = null;

        function __construct($name){
            echo 'objeto iniciado';
            $this->nome = $name;
            echo $this->nome;
        }

        function __destruct(){
            echo 'objeto destruido';
        }
    }

    $pessoa = new Pessoa('José');

    unset($pessoa);
?>