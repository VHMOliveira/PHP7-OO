<?php

    class veiculo{

        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerar';
        }
    }

    class carro extends veiculo{
        
        public $teto_solar = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar(){
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante(){
            echo 'Alterar posição do volante';
        }
    }

    class moto extends veiculo{
        
        public $contraPesoGuidao = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo 'Empinando';
        }
    }

    $carro = new carro('ABC1234','Branco');
    $moto = new moto('DEF122','Vermelho');

    echo '<pre>';
    print_r($carro);
    echo '<br/><br/>';
    print_r($moto);
    echo '</br>';
?>