<?php

    //modelo
    class Funcionario{
        
        //atributos

        private $nome = null;
        private $telefone = null;
        private $numFilhos = null;
        private $cargo = null;
        private $salario = null;

        //getters setters com overloading
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        /*
        //getters setters
        function setNome($nome){
            $this->nome = $nome;
        }

        function setFilhos($filhos){
            $this->numFilhos = $filhos;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        /////

        function getNome(){
            return $this->nome;
        }

        function getFilhos(){
            return $this->numFilhos;
        }

        function getTelefone(){
            return $this->telefone;
        }
        */
        //métodos
        function resumirCadFunc(){
            //$nome = $this->getNome();
            $nome = $this->__get('nome');
            //$filhos = $this->getFilhos();
            $filhos = $this->__get('numFilhos');
            //return "$nome possui $filhos filho(s)";
            return $nome . 'possui' . $filhos . 'filho(s)';
        }

        function modificaNumFilhos($numFilhos){
            //afetar um atributo do objeto

            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    //$y->setNome('Jose');
    $y->__set('nome','Jose');
    
    //$y->setFilhos(2);
    $y->__set('numFilhos',2);

    //$y->setTelefone('11 9999-9999');
    $y->__set('telefone','11 9999-9999');
    
    echo $y->resumirCadFunc();
    $y->modificaNumFilhos(3);
    echo $y->resumirCadFunc();
?>