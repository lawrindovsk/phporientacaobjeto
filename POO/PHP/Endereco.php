<?php
class Endereco{
    public string $lougradouro;
    public string $numero;
    public string $complemento;
    public string $bairro;
    public string $estado;
    public string $pais;
    public string $uf;
    public string $cep;
    public string $numero;
    //Classe endereço;

    public function __construct(string $lougradouro, string $numero, string $complemento, string $bairro, string $estado, string $pais, string $uf, string $cep, string $numero)
    {
        $this-> lougradouro = $lougradouro;
        $this-> numero      = $numero;  
        $this-> complemento = $complemento;
        $this-> bairro      = $bairro;
        $this-> estado      = $estado;
        $this-> pais        = $pais;
        $this-> uf          = $uf;
        $this-> cep         = $cep;
        $this-> numero      = $numero;
}//Fim do construtor Endereço;

    //Métodos gets and sets Endereço.php;
    public function getLougradouro() : string {return $this->lougradouro;}
    public function setLougradouro($lougradouro) : void {$this->lougradouro;}

    public function getNumero() : string {return $this->numero;}
    public function setNumero($numero) : void {$this->numero;}

    public function getComplemento() : string {return $this->complemento;}
    public function setComplemento($complemento) : void {$this->complemento;}

    public function getBairro() : string {return $this->bairro;}
    public function setBairro($bairro) : void {$this->bairro;}

    public function getEstado() : string {return $this->estado;}
    public function setEstado($estado) : void {$this->estado;}

    public function getPais() : string {return $this->pais;}
    public function setPais($pais) : void {$this->pais;}

    public function getUf() : string {return $this->uf;}
    public function setUf($uf) : void {$this->uf;}

    public function getCep() : string {return $this->cep;}
    public function setCep($cep) : void {$this->cep;}

    public function getNumero() : string {return $this->numero;}
    public function setNumero($numero) : void {return $this->numero;}

}
?>


