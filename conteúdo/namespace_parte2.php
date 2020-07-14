<?php

    require "./bibliotecas/lib1/lib1.php";
    require "./bibliotecas/lib2/lib2.php";

    /**
     * a importação somente é válida para classes e interfaces
     * 
     * ela não se aplica para funções e constantes
     * 
     * "as" funciona como um apelido para a classe de diferentes namespace
     * evitando que tenha conflito
     */

    use B\Cliente as C1;
    use A\Cliente as C2;

    $c = new C1();
    print_r($c);

    echo $c->__get('nome');

    $c = new C2();
    print_r($c);

    echo $c->__get('nome');
?>