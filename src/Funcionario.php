<?php
include_once('Pessoa.php');
include_once('Autenticar.php');

class Funcionario extends Pessoa implements Autenticar
{
    private string $cargo;
    private float $salario;
    private $senha;

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

    public function getSenha():string
    {
        return $this->senha;
    }

    public function setCargo(string $cargo):void
    {
        $this->cargo = $cargo;
    }

    public function setSalario(float $salario):void
    {
        $this->salario = $salario;
    }

    public function setDesconto():void
    {
        $this->desconto = 0.10;
    }

    public function setSenha(string $senha):void
    {
        $this->senha = $senha;
    }

    public function login($nome,$senha):string
    {
        if($this->getNome() === $nome && $this->getSenha() === $senha){
            return "<p>[LOGIN: Usuario " . $this->getNome() . " autenticado com sucesso!]</p>";
        }else{
            return "<p>[Erro! Usuario ou senha incorreta. ]</p>";
        }
    }

}