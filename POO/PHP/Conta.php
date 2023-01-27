<?php
//require_once("Endereco.php");
require_once('Cliente.php');


class Conta{
    //var
    private float $saldoTitular;
    private Cliente $cliente;

    public function __construct(Cliente $cliente, float $saldo)
    {
        $this->cliente = $cliente;
        $this->setSaldo($saldo);
    }//Fim do construtor.

    //Métodos de acesso e mod;
   
    public function getSaldo() : float
    {
        return $this->saldoTitular;
    }//fim do getSaldo;

    public function setSaldo(float $saldo) : void
    {
        $this->saldoTitular = $saldo;
    }//fim do setSaldo;

    //Métodos para depositar, sacar e transferir saldo.

    public function sacar(Conta $cont, float $valor) : void
    {
        if($cont->getSaldo()>= $valor){
            $cont->setSaldo($cont->getSaldo()-$valor);
            return;//Parar a exeução do método.
        }    
        echo "<br> Não é possível sacar $valor, porque você é pobre, e também a conta tem apenas" .$cont->getSaldo()."<br>" ;

    }//fim do método sacar.
       

    public function depositar(Conta $cont, float $valor) : void
    {
        if($valor >= 0){
        $cont->setSaldo($cont->getSaldo()+$valor);
        echo "Depósito realizado com sucesso!<br>";
        return;
        }
    }//fim do método depositar.

    public function transferir(Conta $saque, Conta $transf, float $valor) : void
    {
        if($valor > 0)
        {
            $saque->sacar($saque,$valor);
            $transf->depositar($transf,$valor);
            echo "<br>Transferido com sucesso!<br>";
        }
        $saque->sacar($saque,$valor);
        $transf->depositar($transf,$valor);
    }//fim do transferir.


}//Fim da clsse, conta.
?>