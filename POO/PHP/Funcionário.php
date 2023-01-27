<?php
 require_once("");

 class Funcionario extends Pessoa
 {
   public string  $matricula;
   public float   $salario;
   public string  $cargo;
 }//var.
 public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco, string $matricula, float $salario, string $cargo)
 {
    parent::__construct($cpf,$nome,$telefone,$endereco);
    $this-> matricula = $matricula;
    $this-> salario   = $salario;
    $this-> cargo     = $cargo;   
 }//Fim da construct;

  //Métodos get and sets;

  public function getMatricula() : string {return $this->matricula;}
  public function setMatricula() : void {$this->matricula;}

  public function getSalario() : float {return $this->salario;}
  public function setSalario() : void {$this->salario;}

  public function getCargo() : string {return $this->cargo;}
  public function setCargo() : void   {$this->cargo;}
?>