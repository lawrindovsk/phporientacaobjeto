<?php
    require_once ('Pessoa.php');
    require_once Cliente.php;
    require_once ('Funcionario.php');
    require_once ('Conta.php');
    require_once ("Endereco.php");

    $enderec = new Endereco("Avenida Senador Vergueiro"
    ,"400", "Senac"
    "Centro"
    ,"São Bernardo do Campo"
    ,"São Paulo","SP","Brasil","02345000");

    $client = new Cliente("12345678910","Sobrallzinho","1140028922",$enderec,20);

    $cont = new Conta($client,200);
?>