<?php
    require_once("Endereco.php");


    class Cliente extends Pessoa
    {
        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco, float $taxa)
        {
            parent::__construct($cpf, $nome, $telefone, $endereco);//Chamando a classe Pessoa!.
            $this->taxa = $taxa;
        }//Fim da construct;

        //Método get and sets.
        public function getTaxa() : float {return $this->taxa;}
        public function setTaxa(float $taxa) : void {$this->taxa = $taxa;}
    }//Fim da classe;


?>