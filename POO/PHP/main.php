<?php
    require_once('Conta.php');//Conectei a classe Consta.php;

    $conta = new Conta("12345678910","Allan Sobral da Silva", 1000000);//Instanciar contas.
    $conta->imprimir();


    //Realizando Saque;
    echo "<br><br>";
    $conta->sacar($conta,500000);
    $conta->imprimir();

    //Realizando Depósito;
    echo "<br>";
    $conta->depositar($conta,100000);
    $conta->imprimir();

/////////////////////
    echo "<br>";
    $saque = new Conta("12345678911","Camomiula",500000);
    $saque->imprimir();
//////////////////////

    //Realizando Transferir;
    echo "<br><br>";
    $conta->transferir($saque,$conta,200000);
    $conta->imprimir();
    echo "<br><br>";
    $saque->imprimir();


?>