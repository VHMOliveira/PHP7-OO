<?php

    namespace A;

    class Cliente implements cadastroInterface{
        
        public $nome = 'Jorge';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function salvar(){
            echo 'salvar';
        }

        public function __get($attr){
            return $this->$attr;
        }
    }

    interface cadastroInterface{
        public function salvar();
    }