<?php

    /**
     * Quando existe duas classes com o mesmo nome, o sistema acusará um erro
     * para evitar isso se utiliza o namespace
     * 
     * O namespace cria um bloco global que add as classes dentro desse campo
     * evitando que entre em conflito com outras classes de bibliotecas importadas
     */

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

    $c = new Cliente();
    print_r($c);
    echo $c->__get('nome');

    //para indicar qual namespace quer usar é necessário utilizar a \
    echo '</br>';
    $c = new \A\Cliente();
    print_r($c);
    echo $c->__get('nome');
?>