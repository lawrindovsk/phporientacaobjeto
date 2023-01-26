
<?php
class Conta{
    //var
    private string $cpfTitular;
    private string $nomeTitular;  
    private float $saldoTitular;


    public function __construct(string $cpf, string $nome, float $saldo)
    {
        $this->setCPF($cpf);
        $this->setNome($nome);
        $this->setSaldo($saldo);
    }//Fim do construtor.

    //Métodos de acesso e mod;
    public function getCPF() : string
    {
        return $this->cpfTitular;
    }//fim do getCPF;

    public function getNome() : string
    {
        return $this->nomeTitular;
    }//fim do getNome;

    public function getSaldo() : float
    {
        return $this->saldoTitular;
    }//fim do getSaldo;

    public function setCPF(string $cpf) : void
    {
        $this->cpfTitular = $cpf;
    }//fim do setCPF;

    public function setNome(string $nome) : void
    {
        $this->nomeTitular = $nome;
    }//fim do setNome;

    public function setSaldo(float $saldo) : void
    {
        $this->saldoTitular = $saldo;
    }//fim do setSaldo;

    public function imprimir() : void
    {
        echo "<br>CPF: ".$this->getCPF()."<br>Nome: ".$this->getNome()."<br>Saldo: R$".$this->getSaldo();
    }//fim da função imprimir.

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