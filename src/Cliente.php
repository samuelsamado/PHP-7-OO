<?php
include_once('Pessoa.php');

class Cliente extends Pessoa
{
    private string $dataNacimento;
    private float $renda;


    public function __construct($nome,$idade,$endereco,$dataNacimento,$renda)
    {
        parent::__construct($nome,$idade,$endereco);
        $this->setDataNacimento($dataNacimento);
        $this->setRenda($renda);
    }

    public function getDataNacimento():string
    {
        return $this->dataNacimento;
    }

    public function getRenda():float
    {
        return $this->renda;
    }

    public function setDataNacimento($dataNacimento):void
    {
        $this->dataNacimento = $dataNacimento;
    }

    public function setRenda($renda):void
    {
        $this->renda = $renda;
    }

    public function setDesconto():void
    {
        $this->desconto = 0.05;
    }
}