<?php

    /**
     * try tenta executar o código
     * 
     * catch captura o erro e possibilita o tratamento
     * 
     * finally é uma função opcional quando se usa o catch 
     */

    try{
        echo '<h3> ***Try*** </h3>';

        //instrução para retornar um erro
        /*$sql = 'Select * form Clientes';
        mysql_query($sql);*/

        //simulando acesso ao arquivo que não existe
        if(!file_exists('require_arquivo_a.php')){
            throw new  Exception('O arquivo não existe');
        }

    } catch(Error $e){
        echo '<h3> ***Catch*** </h3>';
        echo '<p style="color: red">' . $e .  '</p>';
    } catch(Exception $e){
        echo '<h3> ***Catch*** </h3>';
        echo '<p style="color: red">' . $e .  '</p>';
    } finally{
        echo '<h3> ***Finally*** </h3>';
    }

    /*************************************tratamento de erro customizado */

    class MinhaExceptionCustomizada extends Exception{
        
        private $erro = '';

        public function __construct($erro){

            $this->erro = $erro;
        }

        public function exibirMensagemErro(){
            return $this->erro;
        }
    }

    try{

        throw new MinhaExceptionCustomizada('esse é um erro de teste');
    }catch(MinhaExceptionCustomizada $e){
        echo $e->exibirMensagemErro();
    }
?>