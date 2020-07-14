<?php

    class Pai{

        private $nome = 'Jorge';
        protected $sobreNome = 'Silva';
        public $humor = 'Feliz';

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            
            return $this->$attr = $value;
        }

        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'Oi';
        }

        public function executarAcao(){
            $this->executarMania();
            $this->responder();
        }
    }

    class Filho extends Pai{

        /*no processo de herança, atributos private não são herdados
        *No caso só atributos protected e public são herdados pelas classes filhos
        além disso os operadores de visibilidade são herdados juntos
        logo, atributos e métodos protected ainda mantém suas restrições de visibilidade

        Outro ponto que o método protected pode ser sobreposto no filho
        */
        
        protected function responder(){
            echo 'Foi';
        }

        public function revelarMetodos(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';        
        }
        
    }

    $pai = new Pai();
    $filho = new Filho();

    //exibir atributos herdados
    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    //exibir os métodos do objeto
    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';
    
    $filho->revelarMetodos();
    $filho->executarAcao();
?>