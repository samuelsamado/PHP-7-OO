<?php
include_once('Pessoa.php');

class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, int $idade,Endereco $endereco, string $cargo, float $salario)
    {
        parent::__construct($nome,$idade,$endereco);
        $this->setCargo($cargo);
        $this->setSalario($salario);
    }

    public function getCargo():string
    {
        return $this->cargo;
    }
    public function getSalario():float
    {
        return $this->salario;
    }

    public function setCargo(string $cargo):void
    {
        $this->cargo = $cargo;
    }

    public function setSalario(float $salario):void
    {
        $this->salario = $salario;
    }
}