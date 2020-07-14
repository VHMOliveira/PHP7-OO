<?php

    /**
     * interface funciona como um contrato, ela define quais métodos
     * devem ser construídos obrigatoriamente dentro das classes
     * que implementam a interface.
     * 
     * Isso gera métodos comuns para as novas classes
     */

    interface EquipamentoEletronico{
        public function ligar();
        public function desligar();
    }

    class Geladeira implements EquipamentoEletronico{

        public function ligar(){
            echo 'ligar geladeira';
        }

        public function desligar(){
            echo 'desligar geladeira';
        }

        public function abrirPorta(){
            echo 'abrir a porta';
        }
    }

    class TV implements EquipamentoEletronico{

        public function ligar(){
            echo 'ligar TV';
        }

        public function desligar(){
            echo 'desligar TV';
        }

        public function trocarCanal(){
            echo 'trocar canal';
        }
    }

    $geladeiraObjeto = new Geladeira();
    $tvObjeto = new TV();

    //////////////////////////////////////////////////////////////////////////
    /**
     * Exemplo 2 - implementando mais de uma interface por classe
     */

    interface MamiferoInterface{
        public function respirar();
    }

    interface TerrestreInterface{
        public function andar();
    }

    interface AquaticoInterface{
        public function nadar();
    }

    class Humano implements MamiferoInterface,TerrestreInterface{
        public function andar(){
            echo 'andar';
        }

        public function respirar(){
            echo 'respirar';
        }
    }

    class Baleia implements MamiferoInterface,AquaticoInterface{
        public function nadar(){
            echo 'nadar';
        }

        public function respirar(){
            echo 'respirar';
        }
    }

    //////////////////////////////////////////////////////////////////////////
    /**
     * Exemplo 3 - implementando mais de uma interface por classe
     */

     interface AnimalInterface{
         public function comer();
     }

     interface AveInterface extends AnimalInterface{
         public function voar();
     }

     class Papagaio implements AveInterface{
        
        public function comer(){
            echo 'comer';
        }

        public function voar(){
            echo 'voar';
        }
     }
?>