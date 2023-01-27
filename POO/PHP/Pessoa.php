<?php
    class Pessoa{
        public string $cpf;
        public string $nome;
        public string $telefone;
        //public string $endereco; //Inserir a variavel que representa o Endereço;

        public function __construct(string $cpf, string $nome, string $telefone)
        {
            $this->cpf      = $cpf;
            $this->nome     = $nome;
            $this->telefone = $telefone;
        }//Fim do construtor.
        

        //Métodos gets and sets.
        public function getCPF() : string
        {
            return $this->cpf;
        }

        public function setCPF(string $cpf) : void
        {
            $this->cpf = $cpf;
        }

        public function getNome() : string 
        {
            return $this->telefone;
        }  

        public function setNome() : void
        {
            $this->cpf = $cpf;
        }

        public function getTelefone() : string
        {
            return $this->telefone;
        }

        public function setTelefone() : void
        {
             $this->telefone;
        }

    }//Fim da classe Pessoa.


?>