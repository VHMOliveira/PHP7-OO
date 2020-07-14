<?php

    namespace B;

    class Cliente implements cadastroInterface{
        
        public $nome = 'Joana';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function remover(){
            echo 'remover';
        }

        public function __get($attr){
            return $this->$attr;
        }
    }

    interface cadastroInterface{
        public function remover();
    }