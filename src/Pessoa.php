<?php

abstract class Pessoa {
    private string $nome;
    private int $idade;
    private Endereco $endereco;
    private static $numPessoas = 0;
    protected float $desconto;

    public function __construct(string $nome, int $idade, Endereco $endereco)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setEndereco($endereco);
        $this->validaIdade($idade);
        $this->setDesconto();
        self::$numPessoas++;
    }

    public function __destruct()
    {
        self::$numPessoas--;
    }

    public function getNome(): string 
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public static function getNumPessoas(): int
    {
        return self::$numPessoas;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    public function setEndereco(Endereco $endereco):void
    {
        $this->endereco = $endereco;
    }

    public function validaIdade(int $idade): void
    {
        if($this->getIdade() > 0 && $this->getIdade() < 120){
            $this->setIdade($idade);
        }else{
            die("Idade não permitida!");
        }
    }
    
    public function getDesconto():float
    {
        return $this->desconto;
    }

    protected abstract function setDesconto():void;
}